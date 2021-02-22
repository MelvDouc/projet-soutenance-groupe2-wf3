<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    
    {

        $faker = Faker\Factory::create('fr_FR');

        for($count = 0; $count < 10; $count++) {
            $categorie = new Categories();
            $categorie->setNom('nom de la catégorie');
            $categorie->setCouleur($faker->colorName . "\n");

            $manager->persist($categorie);
        }

        $manager->flush();
    }
}
