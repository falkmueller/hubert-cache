Hubert Cache Extension
======

## Installation

Hubert is available via Composer:

```json
{
    "require": {
        "falkm/hubert-cache": "1.*"
    }
}
```

## Usage

Create an index.php file with the following contents:

```php
<?php

require 'vendor/autoload.php';

$app = new hubert\app();

$config = array(
    "factories" => array(
         "cache" => array(hubert\extension\cache\factory::class, 'get')
        ),
    "config" => array(
        "display_errors" => true,
        "cache" => array(
                "path" => __dir__.'/cache/',
            )
        ),
    "routes" => array(
        "home" => array(
            "route" => "/", 
            "method" => "GET|POST", 
            "target" => function($request, $response, $args){
                hubert()->cache->set("test", "hubert");
                echo  hubert()->cache->get("test");
            })
    ),
    
);

hubert($config);
hubert()->core()->run();
```

For more see the example in this repository.

### components

- monolog: [phpFastCache/phpFastCache](https://github.com/PHPSocialNetwork/phpfastcache)

## License

The MIT License (MIT). Please see [License File](https://github.com/falkmueller/hubert/blob/master/LICENSE) for more information.