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
                    'email' => 'melv.douc@gmail.com',
                    'roles' => ["ROLE_SUPER_ADMIN"],
                    'password' => '$argon2id$v=19$m=65536,t=4,p=1$SUl3MnpvSERZQ0FQMmV1YQ$1euSMDSkumsdpgdhByro69jqIM4Cu25gNHvmTAyTwXU',
                    'pseudo' => 'MelvinDoucet',
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
