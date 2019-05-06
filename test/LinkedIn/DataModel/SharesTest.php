<?php

namespace REverse\LinkedIn\Test\DataModel;

use PHPUnit\Framework\TestCase;
use REverse\LinkedIn\DataModel\ShareContent;
use REverse\LinkedIn\DataModel\Shares;

class SharesTest extends TestCase
{
    public function testToStringMethodReturnObjectLikeExpected()
    {
        $shares = new Shares();

        $shares
            ->setAgent('agent')
            ->setOwner('owner')
        ;

        $shareContent = new ShareContent();
        $shareContent
            ->setTitle('title content')
            ->setDescription('description content')
        ;
        $shares->setContent($shareContent);

        $expected = '{"owner":"owner","agent":"agent","content":{"description":"description content","title":"title content","contentEntites":[]}}';

        $this->assertEquals($expected, $shares->jsonSerialize());
    }
}
