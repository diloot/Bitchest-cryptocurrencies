<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CryptoRepository")
 */
class Crypto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $sigle;


//jointures (Crypto = inverse)
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="crypto")
     */
    private $transactions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cotation", mappedBy="crypto")
     */
    private $cotations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Wallet", mappedBy="crypto")
     */
    private $wallets;


    public function __construct()
    {
        $this->transactions = new ArrayCollection();
        $this->cotations = new ArrayCollection();
        $this->wallets = new ArrayCollection();
    }
    

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }

   /**
     * @return Collection|Transaction[]
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }
    
    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->transactions->contains($transaction)) {
            $this->transactions[] = $transaction;
            $transaction->setCrypto($this);
        }

        return $this;
    }
 
    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->transactions->contains($transaction)) {
            $this->transactions->removeElement($transaction);
            // set the owning side to null (unless already changed)
            if ($transaction->getCrypto() === $this) {
                $transaction->setCrypto(null);
            }
        }

        return $this;
    }
    

    /**
     * @return Collection|Cotation[]
     */
    public function getCotations(): Collection
    {
        return $this->cotations;
    }
    
    public function addCotation(Cotation $cotation): self
    {
        if (!$this->cotations->contains($cotation)) {
            $this->cotations[] = $cotation;
            $cotation->setCrypto($this);
        }

        return $this;
    }
 
    public function removeCotation(Cotation $cotation): self
    {
        if ($this->cotations->contains($cotation)) {
            $this->cotations->removeElement($cotation);
            // set the owning side to null (unless already changed)
            if ($cotation->getCrypto() === $this) {
               $cotation->setCrypto(null);
            }
        }

        return $this;
    }
    

    /**
     * @return Collection|Wallet[]
     */
    public function getWallets(): Collection
    {
        return $this->wallets;
    }

    public function addWallet(Wallet $wallet): self
    {
        if (!$this->wallets->contains($wallet)) {
            $this->wallets[] = $wallet;
            $wallet->setCrypto($this);
        }

        return $this;
    }

    public function removeWallet(Wallet $wallet): self
    {
        if ($this->wallets->contains($wallet)) {
            $this->wallets->removeElement($wallet);
            // set the owning side to null (unless already changed)
            if ($wallet->getCrypto() === $this) {
                $wallet->setCrypto(null);
            }
        }

        return $this; 
    }
}