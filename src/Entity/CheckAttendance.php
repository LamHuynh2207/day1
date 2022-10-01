<?php

namespace App\Entity;

use App\Repository\CheckAttendanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CheckAttendanceRepository::class)
 */
class CheckAttendance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=50)
     */
    private $attendanceDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->id = $Id;
        return $this;
    }

    public function getAttendanceDate(): ?string
    {
        return $this->attendanceDate;
    }

    public function setAttendanceDate(string $attendanceDate): self
    {
        $this->attendanceDate = $attendanceDate;

        return $this;
    }
}
