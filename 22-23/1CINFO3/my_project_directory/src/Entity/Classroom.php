<?php

namespace App\Entity;

use App\Repository\ClassroomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassroomRepository::class)]
class Classroom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $titleClassroom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $nbrStudent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleClassroom(): ?string
    {
        return $this->titleClassroom;
    }

    public function setTitleClassroom(string $titleClassroom): self
    {
        $this->titleClassroom = $titleClassroom;

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

    public function getNbrStudent(): ?int
    {
        return $this->nbrStudent;
    }

    public function setNbrStudent(int $nbrStudent): self
    {
        $this->nbrStudent = $nbrStudent;

        return $this;
    }
}
