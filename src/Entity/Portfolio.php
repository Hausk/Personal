<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * class Portfolio
 * @package App\Entity
 * @ORM\Entity
 */
class Portfolio
{
    /**
     * @var int/null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var string/null
     * @ORM\Column
     */
    private ?string $tite = null;

    /**
     * @var string/null
     * @ORM\Column
     */
    private ?string $tag = null;

    /**
     * @var string|null
     * @ORM\Column(type="text")
     */
    private ?string $description = null;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Media", mappedBy="portfolio", cascade={"persist"}, orphanRemoval=true)
     */
    private Collection $medias;

    /**
     *  Portfolio constructor.
     */
    public function __construct()
    {
        $this->medias = new ArrayCollection();
    }

    /**
     * @return int/null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string/null $tite
     */
    public function getTitle(): ?string
    {
        return $this->tite;
    }

    /**
     * @param string $tite
     */
    public function setTitle(string $tite): void
    {
        $this->tite = $tite;
    }
    
    /**
     * @return string/null $tag
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }
    
    /**
     * @return string/null $description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Collection
     */
    public function getMedias(): Collection
    {
        return $this->medias;
    }

    /**
     * @param Media $media
     */
    public function addMedia(Media $media): void
    {
        if (!$this->medias->contains($media)) {
            $media->setPortfolio($this);
            $this->medias->add($media);
        }
    }

    /**
     * @param Media $media
     */
    public function removeMedia(Media $media): void
    {
        if ($this->medias->contains($media)) {
            $media->setPortfolio(null);
            $this->medias->removeElement($media);
        }
    }
}