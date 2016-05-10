<?php

namespace Imd\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BookingController extends Controller
{
    // helper
    public function hasPermission($booking) {

        $loggedInUser = $this->get('security.token_storage')->getToken()->getUser();

        if($loggedInUser->getId() === $booking->getGuide()->getId() || $loggedInUser->getId() === $booking->getGuest()->getId() || $loggedInUser->hasRole('ROLE_ADMIN')) {
            return true;
        }
        return false;
    }

    public function rateBookingAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $booking = $em->find('Imd\AppBundle\Entity\Booking', $id);
        $loggedInUser = $this->get('security.token_storage')->getToken()->getUser();

        // Wie heeft er permissie om deze booking te bekijken?
        if($this->hasPermission($booking)) {
            return $this->render('ImdAppBundle:Booking:rate.html.twig', array('booking' => $booking, 'loggedinUser' => $loggedInUser));
        }
        else {
            echo 'Geen permissie'; // throw exception --> 403
        }
    }

    public function handleRateBookingAction($id) {

        $em = $this->getDoctrine()->getManager();
        $booking = $em->find('Imd\AppBundle\Entity\Booking', $id);
        $loggedInUser = $this->get('security.token_storage')->getToken()->getUser();

        if($this->hasPermission($booking)) {

            $booking->setRating($this->get('request')->request->get('rating') + 0);
            $booking->setFeedback($this->get('request')->request->get('feedback'));

            $em->flush();

            return $this->render('ImdAppBundle:Booking:rate.html.twig', array('booking' => $booking, 'loggedinUser' => $loggedInUser));
        }
        else {
            echo 'Geen permissie'; // throw exception --> 403
        }
    }

    public function handleFeedbackAnswerAction($id) {

        $em = $this->getDoctrine()->getManager();
        $booking = $em->find('Imd\AppBundle\Entity\Booking', $id);

        $loggedInUser = $this->get('security.token_storage')->getToken()->getUser();
        if($loggedInUser->hasRole('ROLE_ADMIN')) {

            $fa = new \Imd\AppBundle\Entity\FeedbackAnswer();
            $fa->setAuthor($loggedInUser);
            $fa->setBooking($booking);
            $fa->setComment($this->get('request')->request->get('feedbackAnswer'));

            $booking->setFeedbackAnswer($fa);

            $em->flush();

            return $this->render('ImdAppBundle:Booking:rate.html.twig', array('booking' => $booking,'loggedinUser' => $loggedInUser));
        }
        else {
            echo 'Geen permissie'; // throw exception --> 403
        }
    }

    public function mailHelper($b) {

        $mailer = $this->get('mailer');
        $message = $mailer->createMessage()
            ->setSubject('Bedankt voor uw bezoek aan IMD')
            ->setFrom('info@imd.be')
            ->setTo('jasp.desmet@gmail.com')
            ->setBody(
                $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                    'ImdAppBundle:Emails:afterVisitMail.html.twig',
                    array('booking' => $b)
                ),
                'text/html'
            );

        echo $mailer->send($message);
    }


    public function askFeedbackMailAction() {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('b')
           ->from('ImdAppBundle:Booking', 'b')
           ->where('b.meetTime > :date_start')
           ->andWhere('b.meetTime < :date_end')
           ->setParameter('date_start', (new \DateTime("now"))->format('Y-m-d 00:00:00'))
           ->setParameter('date_end',   (new \DateTime("now"))->format('Y-m-d 23:59:59'));
        $query = $qb->getQuery();
        
        $bookings = $query->getResult();

        foreach($bookings as $b) {
            $this->mailHelper($b);
        }

        return new \Symfony\Component\HttpFoundation\Response('<html><body>Hello jass</body></html>');
        
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder
            ->add('firstname', null, array('label' => 'Voornaam'))
            ->add('lastname', null, array('label' => 'Achternaam'))
            ->add('specialization', 'choice' , array('label' => 'Specialization', 'choices' => array('Development' => 'Development' , 'Design' => 'Design')))
            ->add('imdYear', null, array('label' => 'Imd Jaar','attr' => array('min' => 1, 'max' => 3) ))
            ->add('email', 'email', array('label' => 'Email'))
            ->add('website', null , array('label' => 'Website'))
            ->add('website', null , array('label' => 'Website'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'first_options' => array('label' => 'Wachtwoord'),
                'second_options' => array('label' => 'Herhaal wachtwoord'),
                'invalid_message' => 'Oops, wachtwoorden zijn niet gelijk!',
            ))
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Imd\AppBundle\Entity\User',
            'cascade_validation' => true
        );
    }

    public function listBookingAction()
    {
        $user = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $bookings = $qb->select('b')
                       ->from('ImdAppBundle:Booking', 'b')
                       ->where('b.guest = :user')
                       ->orwhere('b.guide = :user')
                       ->setParameter(':user', $user)
                       ->getQuery()
                       ->getResult();
        return $this->render('ImdAppBundle:Booking:bookings.html.twig', array('bookings' => $bookings));
    }
}
