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
        $client1->setCompany('FNAC');
        $client1->setAddress('Adresse de la FNAC');
        $client1->setUsername('FNAC');
        $client1->setPassword($this->passwordEncoder->encodePassword($client1, 'FNAC'));
        $client1->setRoles(["ROLE_ADMIN"]);
        $manager->persist($client1);

        $client2 = new Client();
        $client2->setCompany('DARTY');
        $client2->setAddress('Adresse de DARTY');
        $client2->setUsername('DARTY');
        $client2->setPassword($this->passwordEncoder->encodePassword($client2, 'DARTY'));
        $client2->setRoles(["ROLE_ADMIN"]);
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setCompany('AMAZON');
        $client3->setAddress('Adresse d\'AMAZON');
        $client3->setUsername('AMAZON');
        $client3->setPassword($this->passwordEncoder->encodePassword($client1, 'AMAZON'));
        $client3->setRoles(["ROLE_ADMIN"]);
        $manager->persist($client3);

        $client4 = new Client();
        $client4->setCompany('Cdiscount');
        $client4->setAddress('Adresse de Cdiscount');
        $client4->setUsername('Cdiscount');
        $client4->setPassword($this->passwordEncoder->encodePassword($client4, 'Cdiscount'));
        $client4->setRoles(["ROLE_ADMIN"]);
        $manager->persist($client4);

        $manager->flush();

        // Chaque client peut avoir des utilisateurs donc je dois ajouter une référence
        $this->addReference('client1', $client1);
        $this->addReference('client2', $client2);
        $this->addReference('client3', $client3);
        $this->addReference('client4', $client4);
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