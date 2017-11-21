<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant", uniqueConstraints={@ORM\UniqueConstraint(name="cin_UNIQUE", columns={"cin"})}, indexes={@ORM\Index(name="fk_Etudiant_Groupe1_idx", columns={"num_group"})})
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_carte_etu", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numCarteEtu;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var \AppBundle\Entity\Groupe
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_group", referencedColumnName="num_group")
     * })
     */
    private $numGroup;


}
