<?php

namespace REverse\LinkedIn\Endpoint;

use REverse\LinkedIn\Client;
use REverse\LinkedIn\DataModel\Shares;
use REverse\LinkedIn\Transport\TransportInterface;

class Share extends EndpointBase
{
    const ENDPOINT_PATH = '/shares';

    public function postShares(Shares $shares)
    {
        return $this->getClient()->doRequest(self::ENDPOINT_PATH, $shares->jsonSerialize(), TransportInterface::METHOD_POST);
    }
}
