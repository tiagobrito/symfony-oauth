<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfferQCRepository")
 */
class OfferQC
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $offerId;

    /**
     * @ORM\Column(type="integer")
     */
    private $accommodationProviderId;

    public function getId()
    {
        return $this->id;
    }
}
