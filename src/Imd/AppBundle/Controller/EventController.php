<?php

namespace Imd\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class EventController extends Controller
{
    public function getEventByIdAction($id, Request $request) {

        $em = $this->getDoctrine()->getManager();
        $event = $em->find('Imd\AppBundle\Entity\Event', $id);

        return $this->render('ImdAppBundle:Event:show.html.twig', array(
            'event' => $event
        ));
    }


    public function createEventAction(Request $request)
    {
        $event = new \Imd\AppBundle\Entity\Event();
        $eventFormType = new \Imd\AppBundle\Form\Type\CreateEventFormType();
        $form = $this->createForm($eventFormType, $event);

        $form->handleRequest($request);

        if ($form->isValid()) {

            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('imd_event_by_id', array('id' => $event->getId()));
        }

        return $this->render('ImdAppBundle:Event:create.html.twig', array(
            'form' => $form->createView()
        ));
    }
}