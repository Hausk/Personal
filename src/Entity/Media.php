<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Media
 * @package App\Entity
 * @ORM\Entity
 */
class Media
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    private ?string $path = null;

    /**
     * @var Portfolio|null
     * @ORM\ManyToOne(targetEntity="Portfolio", inversedBy="medias")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private ?Portfolio $portfolio;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return Portfolio|null
     */
    public function getPortfolio(): ?Portfolio
    {
        return $this->portfolio;
    }

    /**
     * @param Portfolio|null $portfolio
     */
    public function setPortfolio(?Portfolio $portfolio): void
    {
        $this->portfolio = $portfolio;
    }
}