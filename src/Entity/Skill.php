<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Skill
 */
class Skill
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
    private ?int $level = null;

    /**
     * @var int/null
     * @ORM\Colum(type="integer")
     */
    private ?int $time = null;

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
     * @return int/null
     */
    public function getTime(): ?int
    {
        return $this->time;
    }

    /**
     * @param int/null $time
     */
    public function setTime(?int $time): void
    {
        $this->time = $time;
    }
}