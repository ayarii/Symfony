<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $nce;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\ManyToOne(targetEntity=Classroom::class, inversedBy="student")
     */
    private $classroom;

    /**
     * @ORM\Column(type="float")
     */
    private $moyenne;

    /**
     * @return mixed
     */
    public function getNce()
    {
        return $this->nce;
    }

    /**
     * @param mixed $nce
     */
    public function setNce($nce): void
    {
        $this->nce = $nce;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

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

    public function __toString()
    {
        return(string)$this->getNce();
    }

    /**
     * @return mixed
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * @param mixed $moyenne
     */
    public function setMoyenne($moyenne): void
    {
        $this->moyenne = $moyenne;
    }
}
