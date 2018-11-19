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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class ClientFixtures extends Fixture implements UserPasswordEncoderInterface
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * ClientFixtures constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $client1 = new Client();
        $client1->setCompany('BileMo');
        $client1->setAddress('Adresse de BileMo');
        $client1->setUsername('BileMo');
        $client1->setPassword($this->passwordEncoder->encodePassword($client1, 'BileMo'));
        $client1->setRoles(["ROLE_ADMIN"]);
        $manager->persist($client1);

        $client2 = new Client();
        $client2->setCompany('FNAC');
        $client2->setAddress('Adresse de la FNAC');
        $client2->setUsername('FNAC');
        $client2->setPassword($this->passwordEncoder->encodePassword($client2, 'FNAC'));
        $client2->setRoles(["ROLE_CLIENT"]);
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setCompany('DARTY');
        $client3->setAddress('Adresse de DARTY');
        $client3->setUsername('DARTY');
        $client3->setPassword($this->passwordEncoder->encodePassword($client3, 'DARTY'));
        $client3->setRoles(["ROLE_CLIENT"]);
        $manager->persist($client3);

        $client4 = new Client();
        $client4->setCompany('AMAZON');
        $client4->setAddress('Adresse d\'AMAZON');
        $client4->setUsername('AMAZON');
        $client4->setPassword($this->passwordEncoder->encodePassword($client4, 'AMAZON'));
        $client4->setRoles(["ROLE_CLIENT"]);
        $manager->persist($client4);

        $client5 = new Client();
        $client5->setCompany('Cdiscount');
        $client5->setAddress('Adresse de Cdiscount');
        $client5->setUsername('Cdiscount');
        $client5->setPassword($this->passwordEncoder->encodePassword($client5, 'Cdiscount'));
        $client5->setRoles(["ROLE_CLIENT"]);
        $manager->persist($client5);

        $client6 = new Client();
        $client6->setCompany('Test');
        $client6->setAddress('Adresse de test');
        $client6->setUsername('Test');
        $client6->setPassword($this->passwordEncoder->encodePassword($client6, 'Test'));
        $client6->setRoles(["ROLE_CLIENT"]);
        $manager->persist($client6);

        $manager->flush();

        // Chaque client peut avoir des utilisateurs donc je dois ajouter une référence
        //$this->addReference('client1', $client1);
        $this->addReference('client2', $client2);
        $this->addReference('client3', $client3);
        $this->addReference('client4', $client4);
        $this->addReference('client5', $client5);
        $this->addReference('client6', $client6);
    }

    public function encodePassword(UserInterface $user, $plainPassword)
    {
        // TODO: Implement encodePassword() method.
    }

    public function isPasswordValid(UserInterface $user, $raw)
    {
        // TODO: Implement isPasswordValid() method.
    }
}