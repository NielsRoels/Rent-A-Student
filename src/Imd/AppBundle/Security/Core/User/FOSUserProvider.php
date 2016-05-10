<?php
namespace Imd\AppBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;

class FOSUserProvider extends BaseClass
{

    /**
     * {@inheritDoc}
     */
    public function connect(UserInterface $user, UserResponseInterface $response)
    {
        //var_dump('use connect');

        $property = $this->getProperty($response);
        $username = $response->getUsername();

        //on connect - get the access token and the user ID
        $service = $response->getResourceOwner()->getName();

        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';

        //we "disconnect" previously connected users
        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }

        //we connect current user
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());

        $this->userManager->updateUser($user);
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        //var_dump('use loadUser');

        // User zoeken in DB
        $username = $response->getUsername();
        $user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));

        // User niet gevonden? --> Registreren
        if (null === $user) {

            //var_dump('user is niet gevonden');

            // Data ophalen uit response
            $data = $response->getResponse();

            // Service specific code
            $service = $response->getResourceOwner()->getName();
            $setter = 'set'.ucfirst($service); // bijvoorbeeld setFacebook_id
            $setter_id = $setter.'Id';
            $setter_token = $setter.'AccessToken';

            // create new user here
            $user = $this->userManager->createUser();
            $user->$setter_id($username); // zorgt ervoor dat er bijvoorbeeld facebook_id of google_id komt
            $user->$setter_token($response->getAccessToken()); // idem

            if($service === 'facebook') {
                // code voor facebook
                //var_dump('facebook');
                $user->setUsername($response->getEmail()); // email als username zetten --> username is verplicht door FOSUser
                $user->setFirstName((isset($data['first_name']) ? $data['first_name'] : ''));
                $user->setLastName((isset($data['last_name']) ? $data['last_name'] : ''));
                $user->setGender((isset($data['gender']) ? $data['gender'] : ''));
                $user->setEmail($response->getEmail());
                
                //$user->setDateOfBirth((isset($data['birthday']) ? new \DateTime($data['birthday']) : ''));
                $user->setCity((isset($data['hometown']['name']) ? $data['hometown']['name'] : ''));
                $user->setPicture((isset($data['picture']['data']['url']) ? $data['picture']['data']['url'] : ''));
                $user->setBio((isset($data['bio']) ? $data['bio'] : ''));
                $user->setWebsite((isset($data['website']) ? $data['website'] : ''));

                $user->addRole('ROLE_GUEST');

                // indien eerste gebruiker --> maak admin
                if(count($this->userManager->findUsers()) === 0) {
                    $user->addRole('ROLE_ADMIN');
                } 


                $user->setPlainPassword(md5(uniqid(rand(), true))); // plain generated md5 string --> dit is niet de password encryptie maar gewoon een string generator
                
            }
            elseif($service === 'twitter') {
                // code voor twitter
                //var_dump('twitter');
                //var_dump($data);
            }
            elseif($service === 'github') {
                // code voor github
                //var_dump('github');
                //var_dump($data);
            }
            else {
                //var_dump('onbekende service');
                //var_dump($data);
            }

            $user->setEnabled(true);
            $this->userManager->updateUser($user);

            return $user;
        }

        //var_dump('user is gevonden');

        //if user exists - go with the HWIOAuth way
        $user = parent::loadUserByOAuthUserResponse($response);

        $serviceName = $response->getResourceOwner()->getName();
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';

        //update access token
        $user->$setter($response->getAccessToken());

        return $user;
    }

}