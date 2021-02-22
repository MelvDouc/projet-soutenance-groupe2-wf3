<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToMany(targetEntity=Categories::class)
     */
    private $id_categorie;

    /**
     * @ORM\ManyToMany(targetEntity=Tailles::class)
     */
    private $id_tailles;

    public function __construct()
    {
        $this->id_categorie = new ArrayCollection();
        $this->id_tailles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection|Categories[]
     */
    public function getIdCategorie(): Collection
    {
        return $this->id_categorie;
    }

    public function addIdCategorie(Categories $idCategorie): self
    {
        if (!$this->id_categorie->contains($idCategorie)) {
            $this->id_categorie[] = $idCategorie;
        }

        return $this;
    }

    public function removeIdCategorie(Categories $idCategorie): self
    {
        $this->id_categorie->removeElement($idCategorie);

        return $this;
    }

    /**
     * @return Collection|Tailles[]
     */
    public function getIdTailles(): Collection
    {
        return $this->id_tailles;
    }

    public function addIdTaille(Tailles $idTaille): self
    {
        if (!$this->id_tailles->contains($idTaille)) {
            $this->id_tailles[] = $idTaille;
        }

        return $this;
    }

    public function removeIdTaille(Tailles $idTaille): self
    {
        $this->id_tailles->removeElement($idTaille);

        return $this;
    }

}
