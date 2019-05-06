<?php

namespace REverse\LinkedIn;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\LinkedIn as LinkedInProvider;
use REverse\LinkedIn\Exception\TokenNotInitializedException;
use REverse\LinkedIn\Transport\Factory;
use REverse\LinkedIn\Transport\TransportInterface;

class Client
{
    const BASE_URI = 'https://api.linkedin.com/v2';
    /**
     * @var LinkedInProvider
     */
    private $linkedInProvider;

    /**
     * @var TransportInterface
     */
    private $transport;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var array
     */
    private $header = [];

    /**
     * Client constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     *
     * @throws Exception\RuntimeException
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUri)
    {
        $this->linkedInProvider = new LinkedInProvider([
            'clientId'          => $clientId,
            'clientSecret'      => $clientSecret,
            'redirectUri'       => $redirectUri,
        ]);

        $this->linkedInProvider->withResourceOwnerVersion(2);

        $this->transport = Factory::createTransport();
    }

    /**
     * @param array $options
     *
     * @return string
     */
    public function getAuthenticationUrl(array $options = []): string
    {
        return $this->linkedInProvider->getAuthorizationUrl($options);
    }

    /**
     * @param string $code
     *
     * @return string
     *
     * @throws IdentityProviderException
     */
    public function initToken(string $code): string
    {
        $this->token = $this->linkedInProvider->getAccessToken('authorization_code', [
            'code' => $code,
        ])->getToken();

        $this->header = [
            'Authorization: Bearer '.$this->token,
        ];

        return $this->token;
    }

    /**
     * @return string
     * @throws TokenNotInitializedException
     */
    public function getToken(): string
    {
        if (null === $this->token) {
            throw new TokenNotInitializedException();
        }
        return $this->token;
    }

    public function setToken(string $token)
    {
        $this->token = $token;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function doRequest($path, $body, $method): string
    {
        return $this->transport->executeRequest(self::BASE_URI.$path, $body, $method, $this->header);
    }
}
