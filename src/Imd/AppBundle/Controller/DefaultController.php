<?php

namespace Imd\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $bookings = $qb->select('b')
                       ->from('ImdAppBundle:Booking', 'b')
                       ->where('b.feedback IS NOT NULL')
                       ->setMaxResults(3)
                       ->getQuery()
                       ->getResult();

        $qb = $em->createQueryBuilder();
        $imders =   $qb->select('u')
                       ->from('ImdAppBundle:User', 'u')
                       ->where('u.roles LIKE :role')
                       ->andwhere('u.enabled = :enabled')
                       ->setParameter('role', '%ROLE_IMD%')
                       ->setParameter('enabled', 1)
                       //->setMaxResults(3)
                       ->getQuery()
                       ->getResult();

        shuffle($imders);
        $featureImders = [$imders[0], $imders[1], $imders[2]];

        $voorbeeldParams = [
            'bookings' => $bookings,
            'imders' => $featureImders
        ];

        return $this->render('ImdAppBundle:Default:index.html.twig', $voorbeeldParams);
    }
}
