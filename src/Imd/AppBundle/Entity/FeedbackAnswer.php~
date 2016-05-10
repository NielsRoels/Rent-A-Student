<?php
namespace Imd\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="feedback_answer")
 */
class FeedbackAnswer {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id; // Entity moet een primery key hebben ookal is dit qua normalisering niet echt nodig

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     **/
    protected $author; // int

	/**
     * @ORM\OneToOne(targetEntity="Booking", inversedBy="feedbackAnswer", cascade={"persist"})
     * @ORM\JoinColumn(name="booking_id", referencedColumnName="id")
     **/
	protected $booking; // int

	/** @ORM\Column(type="string", length=240, nullable=true) */
	protected $comment; // string 240 char


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
     * Set comment
     *
     * @param string $comment
     * @return FeedbackAnswer
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set author
     *
     * @param \Imd\AppBundle\Entity\User $author
     * @return FeedbackAnswer
     */
    public function setAuthor(\Imd\AppBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Imd\AppBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set booking
     *
     * @param \Imd\AppBundle\Entity\Booking $booking
     * @return FeedbackAnswer
     */
    public function setBooking(\Imd\AppBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \Imd\AppBundle\Entity\Booking 
     */
    public function getBooking()
    {
        return $this->booking;
    }
}
