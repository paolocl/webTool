<?php

namespace ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ips
 *
 * @ORM\Table(name="ips", indexes={@ORM\Index(name="id_origine", columns={"id_origine"})})
 * @ORM\Entity
 */
class Ips
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_origine", type="integer", nullable=false)
     */
    private $idOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=30, nullable=false)
     */
    private $ip;



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
     * Set idOrigine
     *
     * @param integer $idOrigine
     *
     * @return Ips
     */
    public function setIdOrigine($idOrigine)
    {
        $this->idOrigine = $idOrigine;

        return $this;
    }

    /**
     * Get idOrigine
     *
     * @return integer
     */
    public function getIdOrigine()
    {
        return $this->idOrigine;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Ips
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
