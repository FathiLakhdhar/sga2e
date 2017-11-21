<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planificationcours
 *
 * @ORM\Table(name="planificationcours", indexes={@ORM\Index(name="fk_PlanificationCours_Salle1_idx", columns={"num_salle"}), @ORM\Index(name="fk_PlanificationCours_Groupe1_idx", columns={"num_group"}), @ORM\Index(name="fk_PlanificationCours_Module1_idx", columns={"code_mod"})})
 * @ORM\Entity
 */
class Planificationcours
{
    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $heureFin;

    /**
     * @var \AppBundle\Entity\Groupe
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_group", referencedColumnName="num_group", unique=true)
     * })
     */
    private $numGroup;

    /**
     * @var \AppBundle\Entity\Module
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_mod", referencedColumnName="code_mod", unique=true)
     * })
     */
    private $codeMod;

    /**
     * @var \AppBundle\Entity\Salle
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_salle", referencedColumnName="num_salle", unique=true)
     * })
     */
    private $numSalle;


}
