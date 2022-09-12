<?php

namespace App\Entity;

use App\Repository\ProprietaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProprietaireRepository::class)
 */
class Proprietaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $numprop;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $numtel;

    /**
     * @ORM\OneToMany(targetEntity=BienImmobilier::class, mappedBy="proprietaire", cascade={"remove"})
     */
    private $bienImmos;

    public function __construct()
    {
        $this->bienImmos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNumprop()
    {
        return $this->numprop;
    }

    /**
     * @param mixed $numprop
     */
    public function setNumprop($numprop): void
    {
        $this->numprop = $numprop;
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

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * @return Collection|BienImmobilier[]
     */
    public function getBienImmos(): Collection
    {
        return $this->bienImmos;
    }

    public function addBienImmo(BienImmobilier $bienImmo): self
    {
        if (!$this->bienImmos->contains($bienImmo)) {
            $this->bienImmos[] = $bienImmo;
            $bienImmo->setProprietaire($this);
        }

        return $this;
    }

    public function removeBienImmo(BienImmobilier $bienImmo): self
    {
        if ($this->bienImmos->removeElement($bienImmo)) {
            // set the owning side to null (unless already changed)
            if ($bienImmo->getProprietaire() === $this) {
                $bienImmo->setProprietaire(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
    return(string)$this->getNom();
    }
}
