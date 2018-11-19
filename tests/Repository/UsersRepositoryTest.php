<?php

namespace App\Tests\Repository;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UsersRepositoryTest extends KernelTestCase
{
    private $managerRegistry;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->managerRegistry = $kernel->getContainer()
            ->get('doctrine');
    }

    public function testConstruct()
    {
        $usersRepository = new UsersRepository($this->managerRegistry);
        static::assertInstanceOf(UsersRepository::class, $usersRepository);
    }
}