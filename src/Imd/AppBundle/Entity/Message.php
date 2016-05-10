<?php
namespace Imd\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="message")
*/
class Message{
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id; //int

	/**
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
	*/
	protected $sender; //int

	/**
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
	*/
	protected $receiver; //int

	/** @ORM\Column(type="string", length=500, nullable=false) */
	protected $message; //string 500 char

	/** @ORM\Column(type="datetime", nullable=false) */
	protected $timeAdded; //date

	/** @ORM\Column(type="datetime", nullable=true) */
	protected $timeRead; //date

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get sender
	 *
	 * @return \Imd\AppBundle\Entity\User
	*/
	public function getSender()
	{
		return $this->sender;
	}

	/**
	 * Set sender
	 *
	 * @param \Imd\AppBundle\Entity\User $sender
	 * @return Message
	*/	
	public function setSender(\Imd\Appbundle\Entity\User $sender = null)
	{
		$this->sender = $sender;

		return $this;
	}

	/**
	 * Get receiver
	 *
	 * @return \Imd\AppBundle\Entity\User
	*/
	public function getReceiver()
	{
		return $this->receiver;
	}

	/**
	 * Set receiver
	 *
	 * @param \Imd\AppBundle\Entity\User $receiver
	 * @return Message
	*/	
	public function setReceiver(\Imd\Appbundle\Entity\User $receiver = null)
	{
		$this->receiver = $receiver;
		
		return $this;
	}

	/**
	 * Get message
	 *
	 * @return string
	*/
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * Set message
	 *
	 * @param string $message
	 * @return Message
	*/
	public function setMessage($message)
	{
		$this->message = $message;

		return $this;
	}

	/**
	 * Get timeAdded
	 *
	 * @return \DateTime
	*/
	public function getTimeAdded()
	{
		return $this->timeAdded;
	}

	/**
	 * Set timeAdded
	 *
	 * @param \DateTime $timeAdded
	 * @return Message
	*/
	public function setTimeAdded($timeAdded)
	{
		$this->timeAdded= $timeAdded;
		return $this;
	}

	/**
	 * Get timeRead
	 *
	 * @return \DateTime
	*/
	public function getTimeRead()
	{
		return $this->timeRead;
	}

	/**
	 * Set read
	 *
	 * @param \DateTime $timeRead
	 * @return Message
	*/ 
	public function setTimeRead($timeRead)
	{
		$this->timeRead = $timeRead;
		return $this;
	}
}
