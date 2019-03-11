<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CotationRepository")
 */
class Cotation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $cours;

    /**
     * @ORM\Column(type="float")
     */
    private $evolution;

    //joiture = proprietaire
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Crypto", inversedBy="cotations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $crypto;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCours()
    {
        return $this->cours;
    }

    public function setCours($cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    public function getEvolution(): ?float
    {
        return $this->evolution;
    }

    public function setEvolution(float $evolution): self
    {
        $this->evolution = $evolution;

        return $this;
    }

    //jointure
    public function getCrypto(): ?Crypto
    {
        return $this->crypto;
    }

    public function setCrypto(?Crypto $crypto): self
    {
        $this->crypto = $crypto;

        return $this;
    }
}
