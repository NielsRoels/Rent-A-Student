<?php

// src/AppBundle/Command/SendFeedbackMailsCommand.php
namespace Imd\AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SendFeedbackMailsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Imd:AppBundle:SendFeedbackMails')
            ->setDescription('Stuur een mail naar iedereen die een rondleiding heeft gekregen vandaag.');
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

        return $mailer->send($message);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
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
            $output->writeln($this->mailHelper($b));
        }
    }
}