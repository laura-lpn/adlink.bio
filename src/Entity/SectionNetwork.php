<?php

namespace App\Entity;

use App\Repository\SectionNetworkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionNetworkRepository::class)]
class SectionNetwork
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bgColor = null;

    #[ORM\Column(length: 255)]
    private ?string $iconColor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBgColor(): ?string
    {
        return $this->bgColor;
    }

    public function setBgColor(string $bgColor): self
    {
        $this->bgColor = $bgColor;

        return $this;
    }

    public function getIconColor(): ?string
    {
        return $this->iconColor;
    }

    public function setIconColor(string $iconColor): self
    {
        $this->iconColor = $iconColor;

        return $this;
    }
}