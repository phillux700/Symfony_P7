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

        $manager->flush();

        // Chaque client peut avoir des utilisateurs donc je dois ajouter une référence
        $this->addReference('client1', $client1);
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