<?php

namespace App\DataFixtures;


use Faker\Factory;
use App\Entity\Produits;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
            $faker = \Faker\Factory::create('fr_FR');
        
            for($count = 1; $count <= 20; $count++) {
            // $categorie = $this->getReference(CategoriesFixtures::CATEGORIES);
            $categorie = $this->getReference('categorie_' . $faker->numberBetween(1, 4));
            //$souscategorie = $this->getReference(SousCategoriesFixtures::SOUS_CATEGORIES);
            $souscategorie = $this->getReference('souscategorie_' . $faker->numberBetween(1, 4));

            $produit = new Produits();
            $produit->setNom('produit n° '.$count);
            $produit->setDescription('Description du produit #'.$count);
            $produit->setImg(($count % 2 == 0) ? 'football.jpg' : 'volleyball.jpg');
            //$produit->setImg($faker->image('public/img/produit'));
            $produit->setPrix(number_format(random_int(1,200)));
            $produit->setIdCategories($categorie);
            $produit->setIdSousCategories($souscategorie);


            $manager->persist($produit);
        }

        $manager->flush();
    }

    public function getDependencies() {
        return [
            CategoriesFixtures::class,
            SousCategoriesFixtures::class
        ];
    }
}
