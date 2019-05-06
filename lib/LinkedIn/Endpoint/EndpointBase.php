<?php

namespace REverse\LinkedIn\Endpoint;

use REverse\LinkedIn\Client;

class EndpointBase
{
    /**
     * @var Client
     */
    private $client;

    /**
     * EndpointBase constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}
