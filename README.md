Laravel PredictionIO
====================

SUPER ALPHA, PROBABLY NOT EVEN SAFE TO USE IN YOUR DEV ENVIRONMENT MUCH LESS PROD
=================================================================================

*Based on [bratao](http://github.com/bratao)
*Based on [endroid](http://endroid.nl/)*


The Laravel PredictionIO library provides a client which offers easy access to a PredictionIO recommendation engine.
PredictionIO is an open source machine learning server for software developers to create predictive features, such as
personalization, recommendation and content discovery.

Through a small set of simple calls, all server functionality is exposed to your application. You can add users and items,
register actions between these users and items and retrieve recommendations deduced from this information by any
[`PredictionIO`](http://prediction.io/) recommendation engine. Applications range from showing recommended products in a
web shop to discovering relevant experts in a social collaboration network.


## Installation
* Install library and dependencies:

```bash
$ composer require "hopkins/predictionio-laravel-wrapper:0.1.*@dev"
```

* Add a **provider** in `app/config/app.php`:

```php
    'Hopkins\PredictionWrapper\PredictionWrapperServiceProvider',
```

* Add an **alias** in `app/config/app.php`:

```php
    'EngineClient'      => 'Hopkins\PredictionWrapper\Facades\EngineFacade',
    'EventClient'       => 'Hopkins\PredictionWrapper\Facades\EventFacade',
```

* Define your [PredictionIO API endpoint](http://docs.prediction.io/current/tutorials/quickstart-php.html#add-your-app-to-predictionio) in `app/config/services.php`:

```php
	'predictionio' => array(
		'key' => '0250b3f85ce33284f77c77f36b41010ef2c4fc5c',
	),
```


# License

This project is licensed using [DBAD](http://www.dbad-license.org/). Go have a blast.



## Thanks to
- Braunson Yager
- Laurent Goussard