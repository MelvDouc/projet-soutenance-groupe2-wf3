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
                    'img' => "{{ asset('\img\1-categories\football.jpg') }}",
                ],
                2=> [
                    'nom' => 'Basketball',
                    'img' => "{{ asset('\img\1-categories\basketball.jpg') }}",
                ],
                3 => [
                    'nom' => 'Volleyball',
                    'img' => "{{ asset('\img\1-categories\volleytball.jpg') }}",
                ],
                4 => [
                    'nom' => 'Handball',
                    'img' => "{{ asset('\img\1-categories\handball.jpg') }}",
                ]
            ];

            foreach($categories as $key => $value) {
                $categorie = new Categories();
                $categorie->setNom($value['nom']);
                $categorie->setImg($value['img']);
                // $this->setReference(self::CATEGORIES, $categorie);
                $manager->persist($categorie);

                $this->addReference('categorie_' . $key, $categorie);
            }

        $manager->flush();
    }
}
