<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WalletRepository")
 */
class Wallet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    //Price of the transaction (buy/sell)
    /**
     * @ORM\Column(type="float")
     * @Assert\GreaterThanOrEqual(value = 0)
     */
    private $amount;

    //quantity of the cryptocurrency concerned
    /**
     * @ORM\Column(type="float")
     * @Assert\GreaterThanOrEqual(value = 0)
     */
    private $amount_crypto;

//relations (Wallet = propriétaire)
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Crypto", inversedBy="wallets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $crypto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="wallets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    

    public function getId(): ?int
    {
        return $this->id;
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

//methods relations

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
