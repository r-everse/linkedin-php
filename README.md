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
if ($_GET['code']) {
    $client->initToken($_GET['code']);
    
    $me = new Me($client);
} else {
    $authUrl = $client->getAuthorizationUrl([
        'scope' => [Client::PERMISSION_LITE_PROFILE]
    ]);
    header('Location: '.$authUrl);
    exit;
}
```


