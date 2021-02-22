<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($count = 1; $count <= 20; $count++) {
            $produit = new Produits();
            $produit->setNom('produit n° '.$count);
            $produit->setDescription('Description du produit #'.$count);
            $produit->setImg(($count % 2 == 0) ? 'homme.jpg' : 'femme.jpg');
            $produit->setPrix(number_format(random_int(1,200)));

            $manager->persist($produit);
        }

        $manager->flush();
    }
}
