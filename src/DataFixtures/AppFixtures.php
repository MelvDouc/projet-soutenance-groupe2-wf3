<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($count = 0; $count < 10; $count++) {
            $produit = new Produits();
            $produit->setNom('produit n° '.$count);
            $produit->setDescription('Description du produit #'.$count);
            $produit->setImage(($count % 2 == 0) ? 'homme.jpg' : 'femme.jpg');
            $produit->setPrix(random_int(1,200).'€');
            $produit->setIdCategorie('1');
            $produit->setIdTailles('1');
        }

        $manager->flush();
    }
}
