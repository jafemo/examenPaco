<?php

namespace futsalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jornada
 *
 * @ORM\Table(name="jornada")
 * @ORM\Entity(repositoryClass="futsalBundle\Repository\jornadaRepository")
 */
class jornada
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
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="equipo", type="string", length=255)
     */
    private $equipo;

    /**
     * @var string
     *
     * @ORM\Column(name="rival", type="string", length=255)
     */
    private $rival;


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
     * Set numero
     *
     * @param string $numero
     *
     * @return jornada
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set equipo
     *
     * @param string $equipo
     *
     * @return jornada
     */
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return string
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set rival
     *
     * @param string $rival
     *
     * @return jornada
     */
    public function setRival($rival)
    {
        $this->rival = $rival;

        return $this;
    }

    /**
     * Get rival
     *
     * @return string
     */
    public function getRival()
    {
        return $this->rival;
    }
}

