<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;
use PHPUnit\Util\Exception;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\Column]
    #[Assert\NotBlank(message: "champ obligatoire!")]
    private ?int $nce = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message:"username required!")]
    #[Assert\Length(min: 2,max: 4)]
    private ?string $username = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"moyenne required!")]
    #[Assert\Positive]
    private ?float $moyenne = null;

    #[ORM\ManyToOne(inversedBy: 'students')]
    #[ORM\JoinColumn(onDelete: "CASCADE")]
    private ?Classroom $classroom = null;

    /**
     * @return int|null
     */
    public function getNce(): ?int
    {
        return $this->nce;
    }

    /**
     * @param int|null $nce
     */
    public function setNce(?int $nce): void
    {
        $this->nce = $nce;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getMoyenne(): ?float
    {
        return $this->moyenne;
    }

    public function setMoyenne(float $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    public function getClassroom(): ?Classroom
    {
        return $this->classroom;
    }

    public function setClassroom(?Classroom $classroom): self
    {
        $this->classroom = $classroom;

        return $this;
    }

    public function verifMoyenne()
    {
        if($this->getMoyenne()<0){
            throw new Exception('La moyenne ne peut pas être nulle.');
        }
    }
}
