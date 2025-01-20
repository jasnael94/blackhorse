<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category1= new Category();
        $category1->setTitle('Meuble');
        $manager->persist($category1);

        $category2= new Category();
        $category2->setTitle('Fruit');
        $manager->persist($category2);

        $manager->flush();
    }
}
