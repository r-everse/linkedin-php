<?php

namespace REverse\LinkedIn\Test\Endpoint;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use REverse\LinkedIn\Client;
use REverse\LinkedIn\DataModel\ShareContent;
use REverse\LinkedIn\DataModel\ShareResponse;
use REverse\LinkedIn\DataModel\Shares;
use REverse\LinkedIn\Endpoint\Share;

class ShareTest extends TestCase
{
    public function testPostSharesReturnAnExpectedObject()
    {
        $client = $this->prophesize(Client::class);
        $shares = $this->prophesize(Shares::class);
        $shares->jsonSerialize()->shouldBeCalled();
        $client
            ->doRequest(Argument::exact(Share::ENDPOINT_PATH), Argument::cetera(), 'POST')
            ->willReturn('
            {
    "activity": "urn:li:activity:6275832358151294976",
    "content": {
        "contentEntities": [
            {
                "entityLocation": "https://www.example.com/content.html",
                "thumbnails": [
                    {
                        "authors": [],
                        "imageSpecificContent": {},
                        "publishers": [],
                        "resolvedUrl": "https://www.example.com/image.jpg"
                    }
                ]
            }
        ],
        "title": "Test Share with Content"
    },
    "created": {
        "actor": "urn:li:person:324_kGGaLE",
        "time": 1496275033520
    },
    "distribution": {
        "linkedInDistributionTarget": {
            "visibleToGuest": false
        }
    },
    "edited": false,
    "id": "6275832358189047808",
    "lastModified": {
        "actor": "urn:li:person:324_kGGaLE",
        "time": 1496275033520
    },
    "owner": "urn:li:organization:2414183",
    "subject": "Test Share Subject",
    "text": {
        "text": "Test Share!"
    }
}
            ')
        ;
        
        $share = new Share($client->reveal());

        /** @var ShareResponse $result */
        $result = $share->postShares($shares->reveal());

        $this->assertEquals("Test Share Subject", $result->getSubject());
        $this->assertInstanceOf(ShareContent::class, $result->getContent());
        $this->assertEquals('Test Share with Content', $result->getContent()->getTitle());
        $this->assertCount(1, $result->getContent()->getContentEntities());
        $this->assertEquals('https://www.example.com/content.html', $result->getContent()->getContentEntities()[0]->getEntityLocation());
        $this->assertCount(1, $result->getContent()->getContentEntities()[0]->getThumbnails());
        $this->assertEquals('https://www.example.com/image.jpg', $result->getContent()->getContentEntities()[0]->getThumbnails()[0]->getResolvedUrl());
    }
}
