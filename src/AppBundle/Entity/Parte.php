<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="parte")
 */
class Parte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $avisado;

    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="partes")
     * @var Alumno
     */
    private $alumno;

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="partes")
     * @var Profesor
     */
    private $profesor;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isAvisado()
    {
        return $this->avisado;
    }

    /**
     * @param bool $avisado
     * @return Parte
     */
    public function setAvisado($avisado)
    {
        $this->avisado = $avisado;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param \DateTime $fechaCreacion
     * @return Parte
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
        return $this;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     * @return Parte
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
        return $this;
    }

    /**
     * @return Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * @param Alumno $alumno
     * @return Parte
     */
    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
        return $this;
    }

    /**
     * @return Profesor
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * @param Profesor $profesor
     * @return Parte
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
        return $this;
    }
}
