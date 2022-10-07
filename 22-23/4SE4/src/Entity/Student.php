<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $nce = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

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
}
