<?php
namespace App\Tests\Doctrine;
use App\Doctrine\CurrentUserExtension;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
class CurrentUserExtensionTest extends KernelTestCase
{
    private $tokenStorage;
    private $authorizationChecker;
    private $currentUserExtension;
    public function setUp()
    {
        static::bootKernel();

        $this->tokenStorage = static::$kernel->getContainer()->get('security.token_storage');
        $this->authorizationChecker = static::$kernel->getContainer()->get('security.authorization_checker');
        $this->currentUserExtension = new CurrentUserExtension($this->tokenStorage, $this->authorizationChecker);
    }
    public function testConstruct()
    {
        static::assertInstanceOf(CurrentUserExtension::class, $this->currentUserExtension);
    }
}