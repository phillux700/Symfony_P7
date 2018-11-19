<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /**
     * Création du client HTTP
     */
    public function setUp()
    {
        $this->client = static::createClient();
    }
    /**
     * Test de redirection automatique de la page d'accueil
     */
    public function testHomeRedirected()
    {
        $this->client->request('GET', '/');
        $this->assertSame(302, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test de la page de doc
     */
    public function testHome()
    {
        $this->client->request('GET', '/api');
        $this->assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function tearDown()
    {
        $this->client = null;
    }
}