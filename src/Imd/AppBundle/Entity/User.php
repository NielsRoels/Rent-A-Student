<?php
namespace Imd\AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

// @ORM\Entity(repositoryClass="Imd\AppBundle\Repository\UserRepository")
/**
 * @ORM\Entity
 * @ORM\Table(name="the_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;

    /** @ORM\Column(name="twitter_id", type="string", length=255, nullable=true) */
    protected $twitter_id;

    /** @ORM\Column(name="twitter_access_token", type="string", length=255, nullable=true) */
    protected $twitter_access_token;

    /** @ORM\Column(name="github_id", type="string", length=255, nullable=true) */
    protected $github_id;

    /** @ORM\Column(name="github_access_token", type="string", length=255, nullable=true) */
    protected $github_access_token;

    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;

    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;

    /** @ORM\Column(name="gender", type="string", columnDefinition="enum('male', 'female')") */
    protected $gender;

    /** @ORM\Column(type="string", length=80) */
    protected $firstName;

    /** @ORM\Column(type="string", length=80) */
    protected $lastName;

    /** @ORM\Column(type="string", length=140, nullable=true) */
    protected $website;

    /** @ORM\Column(type="string", length=140, nullable=true) */
    protected $city;

    /** @ORM\Column(type="string", length=240, nullable=true) */
    protected $picture;

    /** @ORM\Column(type="string", length=240, nullable=true) */
    protected $bio;

    /** @ORM\Column(type="date", nullable=true) */
    protected $dateOfBirth;

    /**
     * @ORM\OneToMany(targetEntity="Booking", mappedBy="guide")
     **/
    protected $guideBookings;

    /**
     * @ORM\OneToMany(targetEntity="Booking", mappedBy="guest")
     **/
    protected $guestBookings;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $imdYear; // alleen in te vullen indien IMD

    /** @ORM\Column(type="string", columnDefinition="enum('development', 'design')", nullable=true) */
    protected $specialization; // alleen in te vullen indien IMD
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->guideBookings = new ArrayCollection();
        $this->guestBookings = new ArrayCollection();
    }

    public function getRating() {

        if(count($this->guideBookings) === 0) {
            return false; // nog geen gids geweest
        }

        $isRating = false;
        $totalRating = 0;
        $countRating = 0;

        foreach($this->guideBookings as $booking) {
            if($booking->getRating() !== NULL) {
                $countRating++;
                $totalRating += $booking->getRating();
                $isRating = true;
            }
        }

        if($isRating) {
            return round($totalRating / $countRating,1);
        }
        else {
            return false; // er is geen enkele booking met een rating!
        }
    }

    // Override username
    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);
    }

    public function switchGuestImd() {

        if($this->hasRole('ROLE_IMD')) {
            $this->addRole('ROLE_GUEST');
            $this->removeRole('ROLE_IMD');
        }
        else {
            $this->addRole('ROLE_IMD');
            $this->removeRole('ROLE_GUEST');
        }
        
    }

    public function switchAdmin() {
        if($this->hasRole('ROLE_ADMIN')) {
            $this->removeRole('ROLE_ADMIN');
        }
        else {
            $this->addRole('ROLE_ADMIN');
        }
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set facebook_id
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string 
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * Set google_id
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get google_id
     *
     * @return string 
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set google_access_token
     *
     * @param string $googleAccessToken
     * @return User
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->google_access_token = $googleAccessToken;

        return $this;
    }

    /**
     * Get google_access_token
     *
     * @return string 
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set twitter_id
     *
     * @param string $twitterId
     * @return User
     */
    public function setTwitterId($twitterId)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitter_id
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    /**
     * Set twitter_access_token
     *
     * @param string $twitterAccessToken
     * @return User
     */
    public function setTwitterAccessToken($twitterAccessToken)
    {
        $this->twitter_access_token = $twitterAccessToken;

        return $this;
    }

    /**
     * Get twitter_access_token
     *
     * @return string 
     */
    public function getTwitterAccessToken()
    {
        return $this->twitter_access_token;
    }

    /**
     * Set github_id
     *
     * @param string $githubId
     * @return User
     */
    public function setGithubId($githubId)
    {
        $this->github_id = $githubId;

        return $this;
    }

    /**
     * Get github_id
     *
     * @return string 
     */
    public function getGithubId()
    {
        return $this->github_id;
    }

    /**
     * Set github_access_token
     *
     * @param string $githubAccessToken
     * @return User
     */
    public function setGithubAccessToken($githubAccessToken)
    {
        $this->github_access_token = $githubAccessToken;

        return $this;
    }

    /**
     * Get github_access_token
     *
     * @return string 
     */
    public function getGithubAccessToken()
    {
        return $this->github_access_token;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return User
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        if($this->picture) {
            return $this->picture;
        }
        else {
            return 'http://localhost/php1-team2-rent-a-student/web/images/default-avatar.jpg';
        }
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return User
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Add guideBookings
     *
     * @param \Imd\AppBundle\Entity\Booking $guideBookings
     * @return User
     */
    public function addGuideBooking(\Imd\AppBundle\Entity\Booking $guideBookings)
    {
        $this->guideBookings[] = $guideBookings;

        return $this;
    }

    /**
     * Remove guideBookings
     *
     * @param \Imd\AppBundle\Entity\Booking $guideBookings
     */
    public function removeGuideBooking(\Imd\AppBundle\Entity\Booking $guideBookings)
    {
        $this->guideBookings->removeElement($guideBookings);
    }

    /**
     * Get guideBookings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGuideBookings()
    {
        return $this->guideBookings;
    }

    /**
     * Add guestBookings
     *
     * @param \Imd\AppBundle\Entity\Booking $guestBookings
     * @return User
     */
    public function addGuestBooking(\Imd\AppBundle\Entity\Booking $guestBookings)
    {
        $this->guestBookings[] = $guestBookings;

        return $this;
    }

    /**
     * Remove guestBookings
     *
     * @param \Imd\AppBundle\Entity\Booking $guestBookings
     */
    public function removeGuestBooking(\Imd\AppBundle\Entity\Booking $guestBookings)
    {
        $this->guestBookings->removeElement($guestBookings);
    }

    /**
     * Get guestBookings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGuestBookings()
    {
        return $this->guestBookings;
    }

    /**
     * Set imdYear
     *
     * @param integer $imdYear
     * @return User
     */
    public function setImdYear($imdYear)
    {
        $this->imdYear = $imdYear;

        return $this;
    }

    /**
     * Get imdYear
     *
     * @return integer 
     */
    public function getImdYear($format = false)
    {   

        if($format === 'full-text') {
            return $this->imdYear . ($this->imdYear === 1 ? 'ste' : 'de') . ' jaar IMD';
        }
        elseif($format === 'text') {
            return $this->imdYear . ($this->imdYear === 1 ? 'ste' : 'de');
        }

        return $this->imdYear;
    }

    /**
     * Set specialization
     *
     * @param boolean $specialization
     * @return User
     */
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;

        return $this;
    }

    /**
     * Get specialization
     *
     * @return string 
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }
}
