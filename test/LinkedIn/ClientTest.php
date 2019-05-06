<?php

namespace REverse\LinkedIn\Test;

use League\OAuth2\Client\Provider\LinkedIn;
use League\OAuth2\Client\Token\AccessTokenInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use REverse\LinkedIn\Client;
use REverse\LinkedIn\Exception\TokenNotInitializedException;

class ClientTest extends TestCase
{
    public function testThatObjectInitLinkedInProvider()
    {
        $client = new Client('test', 'test', 'test.test');
        $client->getAuthenticationUrl();

        $this->assertTrue(true);
    }

    public function testIfCallGetTokenBeforeInitTokenThisMethodThrowException()
    {
        $this->expectException(TokenNotInitializedException::class);

        $client = new Client('test', 'test', 'test.test');
        $client->getToken();
    }

    public function testIfCallGetTokenAfterInitTokenIsCalledMethodDoesntThrowException()
    {
        $linkedInProvider = $this->prophesize(LinkedIn::class);
        $token = $this->prophesize(AccessTokenInterface::class);
        $token->getToken()->willReturn('tokenString');
        $linkedInProvider
            ->getAccessToken(Argument::exact('authorization_code'), Argument::exact(['code' => 'test']))
            ->willReturn($token->reveal());
        ;
        $reflection = new \ReflectionClass(Client::class);
        $reflectionProperty = $reflection->getProperty('linkedInProvider');
        $reflectionProperty->setAccessible(true);
        $client = $reflection->newInstanceWithoutConstructor();
        /** @var \ReflectionProperty $reflectionProperty */

        $reflectionProperty->setValue($client, $linkedInProvider->reveal());
        $client->initToken('test');
        $client->getToken();
        $this->assertTrue(true);
    }
}
