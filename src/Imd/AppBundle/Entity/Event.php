<?php
namespace Imd\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * @ORM\Entity
 * @ORM\Table(name="the_event")
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(type="string", length=240, nullable=true) */
    protected $title;

    /** @ORM\Column(type="string", length=240, nullable=true) */
    protected $address;

    /** @ORM\Column(type="string", length=512, nullable=true) */
    protected $bio;

    /** @ORM\Column(type="datetime") */
    protected $startDate;

    /** @ORM\Column(type="datetime") */
    protected $endDate;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="id"))
     **/
    protected $availableGuides; // array

    /** @ORM\Column(type="string", length=7, nullable=true) */
    protected $backgroundColor;

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
     * Set title
     *
     * @param string $title
     * @return Event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Event
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Event
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set backgroundColor
     *
     * @param string $backgroundColor
     * @return Event
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get backgroundColor
     *
     * @return string 
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->availableGuides = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add availableGuides
     *
     * @param \Imd\AppBundle\Entity\User $availableGuides
     * @return Event
     */
    public function addAvailableGuide(\Imd\AppBundle\Entity\User $availableGuides)
    {
        $this->availableGuides[] = $availableGuides;

        return $this;
    }

    /**
     * Remove availableGuides
     *
     * @param \Imd\AppBundle\Entity\User $availableGuides
     */
    public function removeAvailableGuide(\Imd\AppBundle\Entity\User $availableGuides)
    {
        $this->availableGuides->removeElement($availableGuides);
    }

    /**
     * Get availableGuides
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAvailableGuides()
    {


        return $this->availableGuides;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Event
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return Event
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }
}
