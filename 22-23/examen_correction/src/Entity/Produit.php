<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Publicite::class)]
    private Collection $publicite;

    public function __construct()
    {
        $this->publicite = new ArrayCollection();
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

    /**
     * @return Collection<int, Publicite>
     */
    public function getPublicite(): Collection
    {
        return $this->publicite;
    }

    public function addPublicite(Publicite $publicite): self
    {
        if (!$this->publicite->contains($publicite)) {
            $this->publicite->add($publicite);
            $publicite->setProduit($this);
        }

        return $this;
    }

    public function removePublicite(Publicite $publicite): self
    {
        if ($this->publicite->removeElement($publicite)) {
            // set the owning side to null (unless already changed)
            if ($publicite->getProduit() === $this) {
                $publicite->setProduit(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return(string)$this->getNom();
    }
}
