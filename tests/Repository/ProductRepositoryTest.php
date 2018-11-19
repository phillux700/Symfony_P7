<?php

namespace App\Tests\Repository;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductRepositoryTest extends KernelTestCase
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
        $productRepository = new ProductRepository($this->managerRegistry);
        static::assertInstanceOf(ProductRepository::class, $productRepository);
    }
}