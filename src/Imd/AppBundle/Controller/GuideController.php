<?php

namespace Imd\AppBundle\Controller;

use Imd\AppBundle\Entity\Booking;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuideController extends Controller
{
    public function listGuidesAction($eventID)
    {
    	// select all IMD-ers
    	$em = $this->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
	    $users = $qb->select('u')
	       			->from('ImdAppBundle:User', 'u')
	      		 	->where('u.roles LIKE :roles')
                    ->andwhere('u.enabled = :enabled')
	      		 	->setParameter('roles', '%"ROLE_IMD"%')
                    ->setParameter('enabled', 1)
	       			->getQuery()
   					->getResult();
		
        $event = $em->find('ImdAppBundle:Event',$eventID);

        return $this->render('ImdAppBundle:Guide:list.html.twig', array('users' => $users,'eventID' => $eventID,'event' => $event));
    }

    public function chooseDateAction(/*$id*/) {

    	//$userManager = $this->get('fos_user.user_manager');
        //$user = $userManager->findUserBy(array('id' => $id));

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $events = $qb->select('u')
                    ->from('ImdAppBundle:Event', 'u')
                    ->getQuery()
                    ->getResult();

        return $this->render('ImdAppBundle:Guide:choose.html.twig', array('events' => $events)/*, array('user' => $user)*/);
    }

    public function confirmAction($eventID,$guideID) {

    	$em = $this->getDoctrine()->getManager();

        $event = $em->find('ImdAppBundle:Event',$eventID);
        $user = $em->find('ImdAppBundle:User', $guideID);

        return $this->render('ImdAppBundle:Guide:confirm.html.twig', array(
            'event' => $event,
            'user' => $user)
        );
    }

    public function handleConfirmAction($eventID,$guideID) {

        $booking = new Booking();
        $em = $this->getDoctrine()->getManager();

        $event = $em->find('ImdAppBundle:Event',$eventID);
        $user = $em->find('ImdAppBundle:User', $guideID);

        $loggedInUser = $this->get('security.token_storage')->getToken()->getUser();

        $booking->setGuide($user);
        $booking->setGuest($loggedInUser);
        $booking->setMeetTime($event->getStartDate());
        $booking->setPlace($event->getAddress());
        
        $em->persist($booking);
        $em->flush();

        // remove guide from availableGuides of relevant event
        // elke Event heeft een arrayCollection die de id's bijhoud van alle aanwezige gidsen
        // deze array wordt gevuld bij het aanmaken van een event en dan hier één voor één leegemaakt

        return $this->redirectToRoute('imd_app_guide_booking_rate', array('id' => $booking->getId()));

        // return $this->render('ImdAppBundle:Guide:confirm.html.twig', array(
        //     'event' => $event,
        //     'user' => $user,
        //     'message' => 'Uw afspraak is gemaakt.',
        //     'debug' => $loggedInUser
        //     )
        // );
    }
}
