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
     * @ORM\Column(type="string", length=150)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $moyenne;

    /**
     * @ORM\ManyToOne(targetEntity=Classroom::class, inversedBy="students")
     */
    private $classroom;

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



    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMoyenne(): ?float
    {
        return $this->moyenne;
    }

    public function setMoyenne(?float $moyenne): self
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

    public function  __toString()
    {
        return(string)$this->getNce();
    }
}
