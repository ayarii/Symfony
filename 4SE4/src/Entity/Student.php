<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *@Assert\NotBlank(message="NSC is required")
     */
    private $nce;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="Username is required")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid  email.")
     */
    private $email;
    /**
     * @ORM\Column(type="float")
     */
    private $moyenne;
    /**
     * @ORM\ManyToOne(targetEntity=Classroom::class, inversedBy="student",cascade={"remove"})
     */
    private $classroom;

    public function getNce(): ?int
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

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
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
