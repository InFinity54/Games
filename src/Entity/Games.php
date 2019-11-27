<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GamesRepository")
 * @ApiResource(
 *     collectionOperations={"GET", "POST"},
 *     itemOperations={"GET"={"path"="/game/{id}"}, "PUT"={"path"="/game/{id}"}, "DELETE"={"path"="/game/{id}"}}
 * )
 * @ApiFilter(SearchFilter::class, properties={"name": "exact", "company": "exact", "type": "exact"})
 */
class Games
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $releaseDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onWin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onMac;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onLinux;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onPs3;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onPs4;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onXbox360;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onXboxOne;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onSwitch;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onAndroid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onIos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getReleaseDate(): ?DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getOnWin(): ?bool
    {
        return $this->onWin;
    }

    public function setOnWin(bool $onWin): self
    {
        $this->onWin = $onWin;

        return $this;
    }

    public function getOnMac(): ?bool
    {
        return $this->onMac;
    }

    public function setOnMac(bool $onMac): self
    {
        $this->onMac = $onMac;

        return $this;
    }

    public function getOnLinux(): ?bool
    {
        return $this->onLinux;
    }

    public function setOnLinux(bool $onLinux): self
    {
        $this->onLinux = $onLinux;

        return $this;
    }

    public function getOnPs3(): ?bool
    {
        return $this->onPs3;
    }

    public function setOnPs3(bool $onPs3): self
    {
        $this->onPs3 = $onPs3;

        return $this;
    }

    public function getOnPs4(): ?bool
    {
        return $this->onPs4;
    }

    public function setOnPs4(bool $onPs4): self
    {
        $this->onPs4 = $onPs4;

        return $this;
    }

    public function getOnXbox360(): ?bool
    {
        return $this->onXbox360;
    }

    public function setOnXbox360(bool $onXbox360): self
    {
        $this->onXbox360 = $onXbox360;

        return $this;
    }

    public function getOnXboxOne(): ?bool
    {
        return $this->onXboxOne;
    }

    public function setOnXboxOne(bool $onXboxOne): self
    {
        $this->onXboxOne = $onXboxOne;

        return $this;
    }

    public function getOnSwitch(): ?bool
    {
        return $this->onSwitch;
    }

    public function setOnSwitch(bool $onSwitch): self
    {
        $this->onSwitch = $onSwitch;

        return $this;
    }

    public function getOnAndroid(): ?bool
    {
        return $this->onAndroid;
    }

    public function setOnAndroid(bool $onAndroid): self
    {
        $this->onAndroid = $onAndroid;

        return $this;
    }

    public function getOnIos(): ?bool
    {
        return $this->onIos;
    }

    public function setOnIos(bool $onIos): self
    {
        $this->onIos = $onIos;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }
}
