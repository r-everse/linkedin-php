<?php

namespace REverse\LinkedIn\Transport;

interface TransportInterface
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';

    /**
     * Perform HTTP request
     *
     * @param string $uri
     * @param string $body
     * @param string $method
     * @param array $header
     *
     * @return string
     */
    public function executeRequest(string $uri, string $body, string $method = self::METHOD_GET, array $header = []): string;
}
