<?php
/**
 * Created by PhpStorm.
 * User: philippetraon
 * Date: 30/10/2018
 * Time: 21:51
 */

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private $product;

    public function setUp()
    {
        $this->product = new Product();
    }

    public function testIdIsNull()
    {
        $this->assertNull($this->product->getId());
    }

    public function testNameIsOk()
    {
        $this->product->setName('Product');
        $this->assertSame('Product', $this->product->getName());
    }

    public function testDescriptionIsOk()
    {
        $this->product->setDescription('Description');
        $this->assertSame('Description', $this->product->getDescription());
    }

    public function testPriceIsOk()
    {
        $this->product->setPrice('999.0');
        $this->assertEquals('999.0', $this->product->getPrice());
    }

    public function testSetCreatedAt()
    {
        $this->product->setCreatedAt(new \DateTime());
        $this->assertInstanceOf(\DateTime::class, $this->product->getCreatedAt());
    }
}