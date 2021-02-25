<?php

namespace App\DataFixtures;

use App\Entity\SousCategories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SousCategoriesFixtures extends Fixture
{
    public const SOUS_CATEGORIES = null;

    public function load(ObjectManager $manager)
    {
        $souscategories = [
            1 => [
                'nom' => 'Ballons',
                'img' => 'img.img',
            ],
            2 => [
                'nom' => 'Maillots',
                'img' => 'img.img',
            ],
            3 => [
                'nom' => 'Chaussures',
                'img' => 'img.img',
            ],
            4 => [
                'nom' => 'Accessoires',
                'img' => 'img.img',
                ]
        ];

        foreach($souscategories as $keytwo => $value) {
            $souscategorie = new SousCategories();
            $souscategorie->setNom($value['nom']);
            // $this->setReference(self::SOUS_CATEGORIES, $souscategorie);
            $manager->persist($souscategorie);
        
            $this->addReference('souscategorie_' . $keytwo, $souscategorie);
        }

    $manager->flush();
    }

}
