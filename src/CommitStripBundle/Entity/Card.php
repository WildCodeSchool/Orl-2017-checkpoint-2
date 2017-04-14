<?php

namespace CommitStripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity(repositoryClass="CommitStripBundle\Repository\CardRepository")
 */
class Card
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
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="nbcard", type="string", length=255, nullable=true)
     */
    private $nbcard;


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
     * Set picture
     *
     * @param string $picture
     *
     * @return Card
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set nbcard
     *
     * @param string $nbcard
     *
     * @return Card
     */
    public function setNbcard($nbcard)
    {
        $this->nbcard = $nbcard;

        return $this;
    }

    /**
     * Get nbcard
     *
     * @return string
     */
    public function getNbcard()
    {
        return $this->nbcard;
    }
}
