<?php

namespace Imd\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function listUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("ImdAppBundle:User")->findAll();
        
        return $this->render('ImdAppBundle:Users:list.html.twig', array('users' => $users));
    }

    public function makeImdAction(Request $request) {
        
        if ($request->isMethod('POST')) {

            $userManager = $this->get('fos_user.user_manager');

            $user = $userManager->findUserBy(array('id' => $this->get('request')->request->get('userId'))); // finduser method van FOSUserManager
            
            $user->switchGuestImd();

            $userManager->updateUser($user);
        }

        return $this->redirectToRoute('imd_app_admin_userlist');
    }

    public function findUserAction(Request $request)
    {
        if($request->isMethod('POST')) {
            $input = $_POST['name'];

            $em = $this->getDoctrine()->getManager();
            $qb = $em->createQueryBuilder();
            $users = $qb -> select('u')
                        -> from('ImdAppBundle:User', 'u')
                        -> where('u.firstName LIKE :name')
                        -> orwhere('u.lastName LIKE :name')
                        -> setParameter('name', $input.'%')
                        -> getQuery()
                        -> execute();
        }

        if(isset($users) && $users != NULL){
            return $this->render('ImdAppBundle:Users:list.html.twig', array('users' => $users));
        } else {
            return $this->render('ImdAppBundle:Users:list.html.twig');
        }
    }

    public function deleteUserAction(Request $request)
    {
        if($request->isMethod('POST')){
            $selectedUser = $_POST['deleteId'];
            $status = $_POST['status'];

            $em = $this->getDoctrine()->getManager();
            $qb = $em->createQueryBuilder();
            
            if($status == true){
                $disable = $qb -> update('ImdAppBundle:User', 'u')
                               -> set('u.enabled', ':enabled')
                               -> andwhere('u.id = :user')
                               -> setParameter('enabled', false)
                               -> setParameter('user', $selectedUser)
                               -> getQuery()
                               -> execute();
            } else {
                $enable = $qb -> update('ImdAppBundle:User', 'u')
                              -> set('u.enabled', ':enabled')
                              -> andwhere('u.id = :user')
                              -> setParameter('enabled', true)
                              -> setParameter('user', $selectedUser)
                              -> getQuery()
                              -> execute();              
            }
        }

        return $this->redirectToRoute('imd_app_admin_userlist');        
    }
}