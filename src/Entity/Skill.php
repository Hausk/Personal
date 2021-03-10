<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * Class Skill
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SkillRepository")
 */
class Skill
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var string/null
     * @ORM\Column
     * @Assert\NotBlank(message="Ce champs doit être remplit")
     */
    private ?string $name = null;

    /**
     * @var int/null
     * @ORM\Column(type="integer")
     * @Assert\notBlank(message="Ce champs doit être remplit")
     * @Assert\Range(
     *      min=1, 
     *      max=10,
     *      minMessage="Le niveau doit être supérieur à 0 !",
     *      maxMessage="Le niveau doit être inférieur à 11 !"
     * )
     */
    private ?int $level = null;

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

}