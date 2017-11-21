<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module", indexes={@ORM\Index(name="fk_Module_Enseignants_idx", columns={"Enseignants_cin"})})
 * @ORM\Entity
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_mod", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeMod;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_mod", type="string", length=45, nullable=false)
     */
    private $nomMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume_horaires", type="integer", nullable=false)
     */
    private $volumeHoraires;

    /**
     * @var \AppBundle\Entity\Enseignants
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enseignants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Enseignants_cin", referencedColumnName="cin")
     * })
     */
    private $enseignantsCin;


}
