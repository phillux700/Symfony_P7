<?php
/**
 * Created by PhpStorm.
 * User: philippetraon
 * Date: 31/10/2018
 * Time: 11:24
 */

namespace App\Tests\Entity;

use App\Entity\Client;
use App\Entity\Users;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private $client;

    private $users;

    public function setUp()
    {
        $this->client = new Client();
        $this->users = new Users();
    }

    public function testIdIsNull()
    {
        $this->assertNull($this->client->getId());
    }

    public function testCompanyIsOk()
    {
        $this->client->setCompany('Company');
        $this->assertSame('Company', $this->client->getCompany());
    }

    public function testAddressIsOk()
    {
        $this->client->setAddress('Address');
        $this->assertSame('Address', $this->client->getAddress());
    }

    public function testUsernameIsOk()
    {
        $this->client->setUsername('Username');
        $this->assertSame('Username', $this->client->getUsername());
    }

    public function testPasswordIsOk()
    {
        $this->client->setPassword('Password');
        $this->assertSame('Password', $this->client->getPassword());
    }

    /*public function testAddUserIsOk()
    {
        $this->client->addUser($this->users);
        $this->assertCount(1, $this->client->getUsers());
    }*/

    public function testRemoveUser1()
    {
        $this->client->removeUser($this->users);
        $this->assertCount(0, $this->client->getUsers());
    }

    public function testRemoveUser2()
    {
        /*$this->client->removeUser($this->users);
        $this->assertCount(0, $this->client->getUsers());
        $this->assertSame(null, $this->users->getClient());*/
        $this->users->setClient($this->client);
        $this->client->addUser($this->users);
        $this->client->removeUser($this->users);
        $this->assertNull($this->users->getId());
    }

    public function testEraseCredentials()
    {
        $this->assertNull($this->client->eraseCredentials());
    }
    public function testGetRoles()
    {
        $roles = ['ROLE_USER'];
        $this->client->setRoles($roles);
        $this->assertSame($roles, $this->client->getRoles());
    }

    public function testGetSalt()
    {
        $this->assertSame(null, $this->client->getSalt());
    }
}