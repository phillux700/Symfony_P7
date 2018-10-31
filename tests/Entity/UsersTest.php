<?php
/**
 * Created by PhpStorm.
 * User: leazygomalas
 * Date: 31/10/2018
 * Time: 11:35
 */

namespace App\Tests\Entity;


use App\Entity\Client;
use App\Entity\Users;
use PHPUnit\Framework\TestCase;

class UsersTest extends TestCase
{
    private $users;

    private $client;

    public function setUp()
    {
        $this->users = new Users();
        $this->client = new Client();
    }

    public function testIdIsNull()
    {
        $this->assertNull($this->users->getId());
    }

    public function testUsernameIsOk()
    {
        $this->users->setUsername('Username');
        $this->assertSame('Username', $this->users->getUsername());
    }

    public function testEmailIsOk()
    {
        $this->users->setEmail('Email');
        $this->assertSame('Email', $this->users->getEmail());
    }

    public function testFirstNameIsOk()
    {
        $this->users->setFirstName('FirstName');
        $this->assertSame('FirstName', $this->users->getFirstName());
    }

    public function testLastNameIsOk()
    {
        $this->users->setLastName('LastName');
        $this->assertSame('LastName', $this->users->getLastName());
    }

    public function testSetCreatedAt()
    {
        $this->users->setCreatedAt(new \DateTime());
        $this->assertInstanceOf(\DateTime::class, $this->users->getCreatedAt());
    }

    public function testClient()
    {
        $this->users->setClient($this->client);
        $this->assertEquals($this->client, $this->users->getClient());
    }
}