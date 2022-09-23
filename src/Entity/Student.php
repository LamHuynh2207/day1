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
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Name;

    /**
     * @ORM\Column(type="date")
     */
    private $Dob;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $PhoneNum;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Gender;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDob(): ?\DateTimeInterface
    {
        return $this->Dob;
    }

    public function setDob(\DateTimeInterface $Dob): self
    {
        $this->Dob = $Dob;

        return $this;
    }

    public function getPhoneNum(): ?string
    {
        return $this->PhoneNum;
    }

    public function setPhoneNum(string $PhoneNum): self
    {
        $this->PhoneNum = $PhoneNum;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->Gender;
    }

    public function setGender(?string $Gender): self
    {
        $this->Gender = $Gender;

        return $this;
    }
}