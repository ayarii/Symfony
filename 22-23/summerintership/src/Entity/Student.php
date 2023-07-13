<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $ref = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    /**
     * @return int|null
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * @param int|null $ref
     */
    public function setRef(?int $ref): void
    {
        $this->ref = $ref;
    }



    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
