<?php
/**
 * Created by PhpStorm.
 * User: philippetraon
 * Date: 31/10/2018
 * Time: 18:52
 */

namespace App\DataFixtures;


use App\Entity\Client;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $client1 = new Client();
        $client1->setCompany('FNAC');
        $client1->setAddress('Adresse de la FNAC');
        $client1->setUsername('FNAC');
        $client1->setPassword('FNAC');
        $manager->persist($client1);

        $manager->flush();

        // Chaque client peut avoir des utilisateurs donc je dois ajouter une référence
        $this->addReference('client1', $client1);
    }

}