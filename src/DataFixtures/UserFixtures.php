<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setEmail('premier@gmail.com')
              ->setPassword('azert123');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('dede@gmail.com')
              ->setPassword('azertzdczd123');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('user3@gmail.com')
              ->setPassword('passwordUser3');
        $manager->persist($user3);

        $user4 = new User();
        $user4->setEmail('user4@gmail.com')
              ->setPassword('passwordUser4');
        $manager->persist($user4);


        $manager->flush();
    }
}
