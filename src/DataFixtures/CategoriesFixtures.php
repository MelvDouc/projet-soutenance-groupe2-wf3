<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class CategoriesFixtures extends Fixture
{
    public const CATEGORIES = null;

    public function load(ObjectManager $manager)
    
    {

            $categories = [
                1 => [
                    'nom' => 'Football'
                ],
                2=> [
                    'nom' => 'Basketball'
                ],
                3 => [
                    'nom' => 'Volleyball'
                ],
                4 => [
                    'nom' => 'Handball'
                ]
            ];

            foreach($categories as $key => $value) {
                $categorie = new Categories();
                $categorie->setNom($value['nom']);
                // $this->setReference(self::CATEGORIES, $categorie);
                $manager->persist($categorie);

                $this->addReference('categorie_' . $key, $categorie);
            }

        $manager->flush();
    }
}
