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
                    'nom' => 'Football',
                    'img' => 'img.img',
                ],
                2=> [
                    'nom' => 'Basketball',
                    'img' => 'img.img',
                ],
                3 => [
                    'nom' => 'Volleyball',
                    'img' => 'img.img',
                ],
                4 => [
                    'nom' => 'Handball',
                    'img' => 'img.img',
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
