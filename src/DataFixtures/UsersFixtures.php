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

class UsersFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new Users();
        $user1->setUsername('Philippe');
        $user1->setEmail('Adresse de Philippe');
        $user1->setFirstName('Philippe');
        $user1->setLastname('Traon');
        $user1->setCreatedAt(new \DateTime('now'));
        $user1->setClient($this->getReference('client1'));
        $manager->persist($user1);

        $manager->flush();


    }

    public function getDependencies()
    {
        // TODO: Implement getDependencies() method.
        return [ClientFixtures::class];
    }
}