<?php

namespace App\Controller;

use App\Entity\Crypto;
use App\Repository\CryptoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class CryptoController extends AbstractController
{
    /**
     * @Route("/", name="crypto_home")
     */
    public function index(CryptoRepository $repo)
    {
        $cryptos = $repo->findAll();
        return $this->render('crypto/index.html.twig', [
            'cryptos' => $cryptos,
        ]);
    }//end index

    /**
     * @Route("/crypto{id<\d+>}", name="crypto_one")
     */
    public function showOne(Crypto $crypto)
    {
        if (!$crypto) {
            throw $this->createNotFoundException(
                "La cryptomonnaie recherchée est introuvable."
            );
        }
        
        return $this->render('crypto/one.html.twig', [
            'crypto' => $crypto,
        ]);
    }
}//end showOneCrypto
