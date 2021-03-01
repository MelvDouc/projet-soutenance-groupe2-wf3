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
                'img' => '/ballon-football.jpg'
            ],
            2 => [
                'nom' => 'Maillots',
                'img' => 'maillot-football.jpg'
            ],
            3 => [
                'nom' => 'Chaussures',
                'img' => 'chaussures-football.jpg'
            ],
            4 => [
                'nom' => 'Accessoires',
                'img' => 'sac-adidas.jpg'
            ],
            
        ];

        foreach($souscategories as $keytwo => $value) {
            $souscategorie = new SousCategories();
            $souscategorie->setNom($value['nom']);
            $souscategorie->setImg($value['img']);
            // $this->setReference(self::SOUS_CATEGORIES, $souscategorie);
            $manager->persist($souscategorie);
        
            $this->addReference('souscategorie_' . $keytwo, $souscategorie);
        }

    $manager->flush();
    }

}
