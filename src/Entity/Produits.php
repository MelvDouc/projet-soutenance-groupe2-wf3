<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
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
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $image;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_categorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_tailler;

    /**
     * @ORM\Column(type="integer")
     */
    private $categories_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $taille_id;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getIdTailler(): ?int
    {
        return $this->id_tailler;
    }

    public function setIdTailler(int $id_tailler): self
    {
        $this->id_tailler = $id_tailler;

        return $this;
    }

    public function getCategoriesId(): ?int
    {
        return $this->categories_id;
    }

    public function setCategoriesId(int $categories_id): self
    {
        $this->categories_id = $categories_id;

        return $this;
    }

    public function getTailleId(): ?int
    {
        return $this->taille_id;
    }

    public function setTailleId(int $taille_id): self
    {
        $this->taille_id = $taille_id;

        return $this;
    }
}
