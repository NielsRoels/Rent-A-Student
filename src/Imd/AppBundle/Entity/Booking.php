<?php
namespace Imd\AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="booking")
 */
class Booking{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id; // int

	/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="guestBookings")
     * @ORM\JoinColumn(name="guest_id", referencedColumnName="id")
     **/
	protected $guest; // int

	/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="guideBookings")
     * @ORM\JoinColumn(name="guide_id", referencedColumnName="id")
     **/
	protected $guide; // int

	/** @ORM\Column(type="datetime") */
	protected $meetTime; // date

	/** @ORM\Column(type="string", length=120, nullable=false) */
	protected $place; // string 120 char

	/** @ORM\Column(type="string", length=240, nullable=true) */
	protected $feedback; // string 240 char

    /**
     * @ORM\OneToOne(targetEntity="FeedbackAnswer", mappedBy="booking", cascade={"persist"})
     **/
    protected $feedbackAnswer; // string 240 char

	/** @ORM\Column(type="integer", nullable=true) */
	protected $rating; // int

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
     * Set meetTime
     *
     * @param \DateTime $meetTime
     * @return Booking
     */
    public function setMeetTime($meetTime)
    {
        $this->meetTime = $meetTime;

        return $this;
    }

    /**
     * Get meetTime
     *
     * @return \DateTime 
     */
    public function getMeetTime()
    {
        return $this->meetTime;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Booking
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return Booking
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set rating
     *
     * @param \int $rating
     * @return Booking
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return \int 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set guest
     *
     * @param \Imd\AppBundle\Entity\User $guest
     * @return Booking
     */
    public function setGuest(\Imd\AppBundle\Entity\User $guest = null)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * Get guest
     *
     * @return \Imd\AppBundle\Entity\User 
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Set guide
     *
     * @param \Imd\AppBundle\Entity\User $guide
     * @return Booking
     */
    public function setGuide(\Imd\AppBundle\Entity\User $guide = null)
    {
        $this->guide = $guide;

        return $this;
    }

    /**
     * Get guide
     *
     * @return \Imd\AppBundle\Entity\User 
     */
    public function getGuide()
    {
        return $this->guide;
    }

    /**
     * Set imdYear
     *
     * @param integer $imdYear
     * @return Booking
     */
    public function setImdYear($imdYear)
    {
        $this->imdYear = $imdYear;

        return $this;
    }

    /**
     * Get imdYear
     *
     * @return integer 
     */
    public function getImdYear()
    {
        return $this->imdYear;
    }

    /**
     * Set feedbackAnswer
     *
     * @param \Imd\AppBundle\Entity\FeedbackAnswer $feedbackAnswer
     * @return Booking
     */
    public function setFeedbackAnswer(\Imd\AppBundle\Entity\FeedbackAnswer $feedbackAnswer = null)
    {
        $this->feedbackAnswer = $feedbackAnswer;

        return $this;
    }

    /**
     * Get feedbackAnswer
     *
     * @return \Imd\AppBundle\Entity\FeedbackAnswe 
     */
    public function getFeedbackAnswer()
    {
        return $this->feedbackAnswer;
    }
}
