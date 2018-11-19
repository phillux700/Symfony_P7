<?php

namespace App\Tests\Repository;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ClientRepositoryTest extends KernelTestCase
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
        $clientRepository = new ClientRepository($this->managerRegistry);
        static::assertInstanceOf(ClientRepository::class, $clientRepository);
    }
}