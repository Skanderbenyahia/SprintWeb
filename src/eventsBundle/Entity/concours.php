<?php

namespace eventsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * concours
 *
 * @ORM\Table(name="concours")
 * @ORM\Entity(repositoryClass="eventsBundle\Repository\concoursRepository")
 */
class concours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nbredeplaces", type="integer")
     */
    private $nbredeplaces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return concours
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbredeplaces
     *
     * @param integer $nbredeplaces
     *
     * @return concours
     */
    public function setNbredeplaces($nbredeplaces)
    {
        $this->nbredeplaces = $nbredeplaces;

        return $this;
    }

    /**
     * Get nbredeplaces
     *
     * @return int
     */
    public function getNbredeplaces()
    {
        return $this->nbredeplaces;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return concours
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
