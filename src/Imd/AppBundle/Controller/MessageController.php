<?php

namespace Imd\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Imd\AppBundle\Entity\Message;

class MessageController extends Controller
{
    public function listMessagesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em -> createQueryBuilder();
        $user = $this->getUser()->getId();

        $manager = $this->getDoctrine()->getManager();

        $newConversation = $qb -> select('n')
                               -> from('ImdAppBundle:Message', 'n')
                               -> where('n.timeRead is NULL')
                               -> andwhere('n.receiver = :receiver')
                               -> groupBy('n.sender')
                               -> setParameter('receiver', $user)
                               -> getQuery()
                               -> getResult();

        $conversations = $em->createQuery("SELECT m1, m1.sender + m1.receiver as uid
                                           FROM ImdAppBundle:Message as m1 
                                           WHERE m1.sender = ".$user." 
                                           OR m1.receiver = ".$user."
                                           GROUP BY uid
                                           ORDER BY m1.timeAdded DESC")->getResult();

        return $this->render('ImdAppBundle:Messages:messagelist.html.twig', array('conversations' => $conversations, 'loggedInUser' => $this->getUser(), 'news' => $newConversation));
    }

    public function showConversationAction($partnerId, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser()->getId();
        $time = date('Y-m-d H:i:s');

        $messages = $em->getRepository("ImdAppBundle:Message")->findBy(array('sender'=> array($user, $partnerId), 'receiver'=> array($partnerId, $user)),array('id'=>'DESC'));

        $qb = $em->createQueryBuilder();
        $updateTime = $qb -> update('ImdAppBundle:Message', 'm')
            -> set('m.timeRead', ':time')
            -> andwhere('m.receiver = :user1')
            -> andwhere('m.sender = :user2')
            -> setParameter('time', $time)
            -> setParameter('user1', $user)
            -> setParameter('user2', $partnerId)
            -> getQuery();
        $update = $updateTime->execute();

        return $this->render('ImdAppBundle:Messages:conversation.html.twig', array('messages' => $messages, 'partnerId' => $partnerId));
    }

    public function addMessageAction()
    {       
        $request = $this->getRequest();
        $sender = $this->getUser()->getId();
        $receiver = $request->request->get('receiver');

        $em = $this->getDoctrine()->getManager();
        $sender = $this->getUser();
        $text = $request->request->get('message');
        $time = date('Y-m-d H:i:s');

        $receiver = $this->getDoctrine()
            -> getRepository("ImdAppBundle:User")
            -> find($receiver);

        $message = new Message();
        $message->setSender($sender);
        $message->setReceiver($receiver);
        $message->setMessage($text);
        $message->setTimeAdded(new \DateTime($time));

        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();

        $qb = $em->createQueryBuilder();
        $receiverName = $qb -> select('u.firstName')
                            -> from('ImdAppBundle:User', 'u')
                            -> where('u.id = :firstname')
                            -> setParameter('firstname', $sender)
                            -> getQuery()
                            -> execute();

        $name = $request->request->get('message');

        if($name != ""){
            $message = $name;
            $return = array("responseCode"=>200, "message"=>$message, "receiver"=>$receiverName);
        } else {
            $return = array("responseCode"=>400, "message"=>"You have to write a message!");
        }
        $return = json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
    }

    public function searchPartnerAction(Request $request)
    {
        if($request->isMethod('POST')){
            $input = $_POST['name'];
            $user = $this->getUser()->getId();

            $em = $this->getDoctrine()->getManager();
            $qb = $em->createQueryBuilder();
            $partners = $qb -> select('u')
                            -> from('ImdAppBundle:User', 'u')
                            -> where('u.firstName LIKE :name')
                            -> orwhere('u.lastName LIKE :name')
                            -> setParameter('name', $input.'%')
                            -> getQuery()
                            -> execute();

            $qb = $em->createQueryBuilder();
            $newConversation = $qb -> select('n')
                               -> from('ImdAppBundle:Message', 'n')
                               -> where('n.timeRead is NULL')
                               -> andwhere('n.receiver = :receiver')
                               -> groupBy('n.sender')
                               -> setParameter('receiver', $user)
                               -> getQuery()
                               -> getResult();

            $conversations = $em->createQuery("SELECT m1, m1.sender + m1.receiver as uid
                                           FROM ImdAppBundle:Message as m1 
                                           WHERE m1.sender = ".$user." 
                                           OR m1.receiver = ".$user." 
                                           GROUP BY uid 
                                           ORDER BY m1.timeAdded DESC")->getResult();
        }

        return $this->render('ImdAppBundle:Messages:messagelist.html.twig', array('partners'=>$partners, 'conversations'=>$conversations, 'loggedInUser' => $this->getUser(),'news' => $newConversation));
    }
}