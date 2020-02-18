<?php

namespace App\DataFixtures;

use App\Entity\Carte;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class CarteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++) {
            $carte = new Carte();
            $carte->setNom($faker->word);
            $manager->persist($carte);
        }
        $manager->flush();
    }
}