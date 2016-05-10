<?php

namespace Imd\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Imd\AppBundle\Entity\Message;
use Imd\AppBundle\Entity\Users;

class NavController extends Controller
{
    public function DefaultAction(){
        return $this-> render('ImdAppBundle:Messages:conversation.html.twig');
    }

    public function notificationAction(Request $request)
    {

        $loggedInUser = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $readTime = $qb->select('u')
            ->from('ImdAppBundle:Message','u')
            ->where('u.timeRead is NULL')
            ->andWhere('u.receiver = :param')
            ->groupBy('u.sender')
            ->setParameter('param',$loggedInUser)
            ->getQuery()
            ->getResult();

        return $this-> render('ImdAppBundle:Notification:notification.html.twig', array('readTime' => $readTime));

    }

}