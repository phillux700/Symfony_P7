<?php
/**
 * Created by PhpStorm.
 * User: philippetraon
 * Date: 31/10/2018
 * Time: 18:59
 */

namespace App\DataFixtures;


use App\Entity\Client;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class UsersFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++) {
            $user = new Users();
            $user->setUsername($faker->userName);
            $user->setEmail($faker->email);
            $user->setFirstName($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setCreatedAt(new \DateTime('now'));
            $user->setClient($this->getReference('client'.rand(2, 6)));
            $manager->persist($user);
        }


        $manager->flush();


    }

    public function getDependencies()
    {
        // TODO: Implement getDependencies() method.
        return [ClientFixtures::class];
    }
}