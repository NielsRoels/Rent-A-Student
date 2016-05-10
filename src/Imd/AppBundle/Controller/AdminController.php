<?php

namespace Imd\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function adminListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("ImdAppBundle:User")->findAll();

        return $this->render('ImdAppBundle:Admin:admin.html.twig', array('users' => $users));
    }   

    public function adminaddAction(Request $request)
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
            return $this->render('ImdAppBundle:Admin:admin.html.twig', array('users' => $users));
        } else {
            return $this->render('ImdAppBundle:Admin:admin.html.twig');
        }
    }

    public function indexAction()
    {
        return $this->render('ImdAppBundle:Admin:index.html.twig');
    }

    public function adminloginAction()
    {
        return $this->render('ImdAppBundle:Admin:adminlogin.html.twig');
    }

    public function makeAdminAction(Request $request)
    {
        if($request->isMethod('POST')) {
            $userManager = $this->get('fos_user.user_manager');
            $user = $userManager->findUserBy(array('id' => $this->get('request')->request->get('userId')));
            $user->switchAdmin();  
            $userManager->updateUser($user);
        }

        return $this->redirectToRoute('imd_app_admin_userlist');
    }
    
    public function adminlistbookingsAction()
    {
            $em = $this->getDoctrine()->getManager();
            $bookings = $em->getRepository("ImdAppBundle:Booking")->findAll();
            return $this->render('ImdAppBundle:Admin:adminbookings.html.twig', array('bookings' => $bookings));
    }

    public function adminCreateEventAction()
    {
        return $this->render('ImdAppBundle:Admin:admincreateevent.html.twig');
    }
}