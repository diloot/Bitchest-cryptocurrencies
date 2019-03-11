<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    //Price of the transaction (buy/sell)
    /**
     * @ORM\Column(type="float")
     * @Assert\GreaterThanOrEqual(value = 0.01)
     */
    private $amount;

    //quantity of the cryptocurrency concerned
    /**
     * @ORM\Column(type="float")
     * @Assert\GreaterThanOrEqual(value = 0.01)
     */
    private $amount_crypto;

    //type of transaction (1 = buy , 0 = sell)
    /**
     * @ORM\Column(type="string", length=1)
     */
    private $type;


//relations (Transaction = propriétaire)
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Crypto", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $crypto;

    //in order to keep in memory all site transactions $user can be null
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $user;


    
    public function getId(): ?int
    {
        return $this->id;
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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this; 
    }

    public function getAmountCrypto(): ?float
    {
        return $this->amount_crypto;
    }

    public function setAmountCrypto(float $amount_crypto): self
    {
        $this->amount_crypto = $amount_crypto;

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
    
// methods relations 

    public function getCrypto(): ?Crypto
    {
        return $this->crypto;
    }

    public function setCrypto(?Crypto $crypto): self
    {
        $this->crypto = $crypto;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
