<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyQCRepository")
 */
class PropertyQC
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $propertyId;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $status;

    /**
     * @ORM\Column(type="integer")
     */
    private $accommodationProviderId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    public function getId()
    {
        return $this->id;
    }

    public function getPropertyId(): ?int
    {
        return $this->propertyId;
    }

    public function setPropertyId(int $propertyId): self
    {
        $this->propertyId = $propertyId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAccommodationProviderId(): ?int
    {
        return $this->accommodationProviderId;
    }

    public function setAccommodationProviderId(int $accommodationProviderId): self
    {
        $this->accommodationProviderId = $accommodationProviderId;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
