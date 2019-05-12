<?php

namespace REverse\LinkedIn\Test\Endpoint;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;
use REverse\LinkedIn\Client;
use REverse\LinkedIn\Endpoint\BaseUri;
use REverse\LinkedIn\Endpoint\Me;

class MeTest extends TestCase
{
    public function testGetMethod()
    {
        /** @var ObjectProphecy|Client $client */
        $client = $this->prophesize(Client::class);
        $client
            ->doRequest(Argument::exact(Me::ENDPOINT_PATH), Argument::exact(''), 'GET')
            ->willReturn('{
   "firstName":{
      "localized":{
         "en_US":"Bob"
      },
      "preferredLocale":{
         "country":"US",
         "language":"en"
      }
   },
   "localizedFirstName": "Bob",
   "headline":{
      "localized":{
         "en_US":"API Enthusiast at LinkedIn"
      },
      "preferredLocale":{
         "country":"US",
         "language":"en"
      }
   },
   "localizedHeadline": "API Enthusiast at LinkedIn",
   "vanityName": "bsmith",
   "id":"yrZCpj2Z12",
   "lastName":{
      "localized":{
         "en_US":"Smith"
      },
      "preferredLocale":{
         "country":"US",
         "language":"en"
      }
   },
   "localizedLastName": "Smith",
   "profilePicture": {
        "displayImage": "urn:li:digitalmediaAsset:C4D00AAAAbBCDEFGhiJ"
   }
}')
        ;
        $me = new Me($client->reveal());

        $basicProfile = $me->get();

        $this->assertEquals("yrZCpj2Z12", $basicProfile->getId());
        $this->assertEquals("Bob", $basicProfile->getLocalizedFirstName());
        $this->assertEquals("Smith", $basicProfile->getLocalizedLastName());
    }
}
