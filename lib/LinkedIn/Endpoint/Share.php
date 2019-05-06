<?php

namespace REverse\LinkedIn\Endpoint;

use REverse\LinkedIn\Client;
use REverse\LinkedIn\DataModel\Shares;
use REverse\LinkedIn\Transport\TransportInterface;

class Share
{
    const ENDPOINT_PATH = '/shares';

    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function postShares(Shares $shares)
    {
        $this->client->doRequest(self::ENDPOINT_PATH, $shares->jsonSerialize(), TransportInterface::METHOD_POST);
    }
}
