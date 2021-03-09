<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Formation
 */
class Formation
{
    /**
     * @var int/null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer)
     */
    private ?int $id = null;

    /**
     * @var string/null
     * @ORM\Column
     */
    private ?string $name = null;

    /**
     * @var int/null
     * @ORM\Column(type="integer")
     */
    private ?int $gradeLevel = null;

    /**
     * @var string/null
     * @ORM\Colum(type="text")
     */
    private ?string $description = null;

    /**
     * @var DateTimeInterface/null
     * @ORM\Colum(type="date_immutable")
     */
    private ?DateTimeInterface $startedAt = null;

    /**
     * @var DateTimeInterface/null
     * @ORM\Colum(type="date_immutable, nullable=true")
     */
    private ?DateTimeInterface $endedAt = null;

    /**
     * @return int/null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string/null $name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int/null
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int/null $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return DateTimeInterface/null
     */
    public function getStartedAt(): ?DateTimeInterface
    {
        return $this->startedAt;
    }

    /**
     * @param DateTimeInterface/null $startedAt
     */
    public function setStartedAt(?DateTimeInterface $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return DateTimeInterface/null
     */
    public function getEndedAt(): ?DateTimeInterface
    {
        return $this->startedAt;
    }

    /**
     * @param DateTimeInterface/null $endedAt
     */
    public function setEndedAt(?DateTimeInterface $endedAt): void
    {
        $this->endedAt = $endedAt;
    }
}