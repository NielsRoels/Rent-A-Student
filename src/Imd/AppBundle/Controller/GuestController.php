<?php

namespace Imd\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuestController extends Controller
{
    public function loginAction()
    {
        // START Dit moet een aparte actie zijn met een eigen template //
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $bookings = $qb->select('b')
                       ->from('ImdAppBundle:Booking', 'b')
                       ->where('b.feedback IS NOT NULL')
                       ->setMaxResults(3)
                       ->getQuery()
                       ->getResult();
        // STOP Dit moet een aparte actie zijn met een eigen template //

        return $this->render('ImdAppBundle:Guest:login.html.twig', array('bookings' => $bookings));
    }
}
