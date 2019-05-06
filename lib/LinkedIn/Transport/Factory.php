<?php

namespace REverse\LinkedIn\Transport;

use REverse\LinkedIn\Exception\RuntimeException;

class Factory
{
    public static function createTransport(): TransportInterface
    {
        if (extension_loaded('curl')) {
            return new CurlExtensionTransport();
        }

        throw new RuntimeException('Cannot create an HTTP transport object');
    }
}
