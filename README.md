# reverse/linkedin-php


PHP client for LinkedIn API V2.

## Requirements
 - php >= 7.0

## Installation

```SHELL
composer require reverse/linkedin-php:"dev-master"
```

## Using LinkedIn API
To work with LinkedIn API have to init `Client` classes.

```php
$client = new Client('appId', 'appSecret', 'returnUrl');
```


## Authentication
```php
$client = new Client('appId', 'appSecret', 'returnUrl');
if (array_key_exists('code', $_GET)) {
    $client->initToken($_GET['code']);
    
    $me = new Me($client);
} else {
    $authUrl = $client->getAuthenticationUrl([
        'scope' => [Client::PERMISSION_LITE_PROFILE]
    ]);
    header('Location: '.$authUrl);
    exit;
}
```

## Share

There is possibility to publish a new post or share a post on LinkedIn activities

To share a post:
```php
$client = new Client('appId', 'appSecret', 'returnUrl');
if (array_key_exists('code', $_GET)) {
    $client->initToken($_GET['code']);
    
    $shares = new Shares();
    $shares->setResharedShare('urn:li:share:1232132') // Post's urn:id
    
    $shares->setOwner('urn:li:person:c7RFYxyz78')
    
    $shareText = new ShareText();
    $shareText->setTitle('my title');
    
    $shares->setText($shareText);
    
    $shareEndpoint = new REverse\LinkedIn\Endpoint\Share($client);
    $shareEndpoint->postShares($shares);
} else {
    $authUrl = $client->getAuthenticationUrl([
        'scope' => [Client::PERMISSION_LITE_PROFILE, Client::PERMISSION_W_MEMBER_SOCIAL]
    ]);
    header('Location: '.$authUrl);
    exit;
}
```

Before to perform this operation, the user declared in `setOwner` must be authenticated in LinkedIn's application.