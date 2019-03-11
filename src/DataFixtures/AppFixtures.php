<?php

namespace App\DataFixtures;

use App\Entity\Cotation;
use App\Entity\Crypto;
use App\Entity\Transaction;
use App\Entity\User;
use App\Entity\Wallet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    // functions for cotations :
    function getFirstCotation($cryptoname){
        return ord(substr($cryptoname,0,1)) + rand(0, 10);
    }

    function getCotationFor($cryptoname){
        return ((rand(0, 99)>40) ? 1 : -1) * ((rand(0, 99)>49) ? ord(substr($cryptoname,0,1)) : ord(substr($cryptoname,-1))) * (rand(1,10) * .01);
    }

    public function load(ObjectManager $manager)
    {
        //http://github.com/fzaninotto/Faker for creating fake datas
        $faker = \Faker\Factory::create('fr_FR');

        //create the 10 cryptos of the app
        $cryptos = [
            ['name' => 'BitCoin', 'image' => 'bitcoin.png', 'sigle' => 'BTC'],
            ['name' => 'Bitcoin Cash', 'image' => 'bitcoin-cash.png','sigle' => 'BT'],
            ['name' => 'Cardano', 'image' => 'cardano.png', 'sigle' =>'ADA'],
            ['name' => 'Dash', 'image' => 'dash.png', 'sigle' =>'DAS'],
            ['name' => 'Ethereum', 'image' => 'ethereum.png', 'sigle' =>'ETH'],
            ['name' => 'IOTA', 'image' => 'iota.png', 'sigle' =>'IOT'],
            ['name' => 'Litecoin', 'image' => 'litecoin.png','sigle' => 'LTC'],
            ['name' => 'NEM', 'image' => 'nem.png', 'sigle' => 'NEM'],
            ['name' => 'Ripple', 'image' => 'ripple.png', 'sigle' =>'XRP'],
            ['name' => 'Stellar', 'image' => 'stellar.png', 'sigle' =>'XLM']
        ];

        $currencies = [];
        foreach ($cryptos as $money) {
        $currency = new Crypto();
        $currency
            ->setName($money['name'])
            ->setSigle($money['sigle'])
            ->setImage($money['image'])
            ;
        $currencies[] = $currency;

        $manager->persist($currency);
        }

        //insert all 10 cryptos in DB
        $manager->flush();


        // Create 30 cotations(rates) per crypto
        $rates = [];
        foreach ($currencies as $currency) {
            $priceReference = $this -> getFirstCotation($currency->getName());
            for ($i = 1; $i <= 30; ++$i) {
                $evolution  = $this -> getCotationFor($currency->getName());
                if ($i === 1) {
                    //test start at now OK :
                    //$date = new \DateTime('now');
                    //test start at one special past day OK :
                    //$date = new \DateTime('2019-02-12');
                    //30 days before now : 
                    $oneMonthAgo = time()-29*24*3600;
                    //timeStamp direct doesn't work :
                    //$date = new \DateTime($oneMonthAgo); 
                    $date = new \DateTime(date("Y-m-d H:i:s", $oneMonthAgo));

                    //$price = $priceReference + $evolution;
                    //$variation = round((($price - $priceReference) / $priceReference) * 100, 2);
                    $rate = new Cotation();



                    $rate -> setValue($priceReference)
                     -> setCours('0')
                     -> setEvolution('0');

                     $price_ref = $priceReference;

                } else {
                    //plus one day
                    $date->add(new \DateInterval('P1D'));

                    $price = $price_ref + $evolution;
                    $variation = round((($price - $price_ref) / $price_ref) * 100, 2);
                    $rate = new Cotation();


                    $rate -> setValue($price)
                    -> setCours($variation)
                    -> setEvolution($evolution);

                    $price_ref = $price;
                }

                
                $rate
                    -> setCrypto($currency)
                    -> setDate($date)
                    ;

                $manager->persist($rate);
                
                //insert cotations in DB
                $manager->flush();
            } 
        }


        //create 1 admin
        $admin = new User();
        $admin
            -> setUsername('Jérome')
            -> setPassword($this->passwordEncoder->encodePassword($admin, '123456'))
            -> setRoles(['ROLE_ADMIN'])
            -> setSalt('AAAAAAAA')
            -> setEmail('jerome@bitchest.com')
            -> setFirstname('Jérome')
            -> setLastname('Dupont')
            -> setTown('Paris')
            -> setAddress('100 rue de la Paix')
            -> setCp(75002)
            -> setPhone('0605040302')
            -> setSolde(0.00)
            ;

        $manager -> persist($admin);

        //create one wallet per crypto for the admin
        foreach ($currencies as $adminCrypto){
            $adminWallet = new Wallet();
            $adminWallet
                -> setAmount(0)
                -> setAmountCrypto(0)
                -> setUser($admin)
                -> setCrypto($adminCrypto)
                ;

            $manager->persist($adminWallet);
        }


       //create 10 users with 300 € already in his credit
       for($i = 1; $i <= 10; ++$i){
           $user = new User();
           $user 
               -> setUsername('Fakeuser' . $i )
               -> setPassword($this->passwordEncoder->encodePassword($user, '123456'))
               -> setRoles(['ROLE_USER'])
               -> setSalt('AAAAAAAA')
               -> setEmail('fake-user' . $i . '@gmail.com')
               -> setFirstname($faker->firstName())
               -> setLastname($faker->lastName)
               -> setTown($faker->city)
               -> setAddress($faker->streetAddress)
               -> setCp($faker->numberBetween($min = 01000, $max = 99999))
               -> setPhone('0'.$faker->numberBetween($min = 100000000, $max = 999999999))
               -> setSolde(300.00);

            $manager -> persist($user);

            //create between 1 or 4 buying transactions for each user and the 10 cryptos
            foreach ($currencies as $selectedCrypto){
                for($j = 1; $j <= mt_rand(1,4); ++$j){
                    $transaction = new Transaction();
                    $transaction
                        ->setAmount($faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000))
                        ->setAmountCrypto($faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100))
                        ->setDate($faker->dateTimeBetween('-6 months'))
                        ->setUser($user)
                        ->setCrypto($selectedCrypto)
                        ->setType(1)
                        ;
                }
                //for each user create 1 wallet per the 10 cryptos
                $wallet = new Wallet();
                $wallet
                    ->setAmount($faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000))
                    ->setAmountCrypto($faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100))
                    ->setUser($user)
                    ->setCrypto($selectedCrypto)
                    ;

                $manager->persist($transaction);
                $manager->persist($wallet);
           }
       }
       //insert users, transactions & wallets
       $manager->flush();
    
    }//end function load
   
}//end class