<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public const CATEGORIES = null;

    public function load(ObjectManager $manager)
    
    {

            $users = [
                1 => [
                    'email' => '#',
                    'roles' => ["#"],
                    'password' => 'Version Cryptée de votre mot de passe',
                    'pseudo' => '#',
                    'date_inscription' => new \DateTime('now'),
                ],
            ];
            foreach($users as $key => $value) {
                $user = new User();
                $user->setEmail($value['email']);
                $user->setRoles($value['roles']);
                $user->setPassword($value['password']);
                $user->setPseudo($value['pseudo']);
                $user->setDateInscription($value['date_inscription']);

                // $this->setReference(self::CATEGORIES, $categorie);
                $manager->persist($user);
            }

        $manager->flush();
    }
}
