Laravel PredictionIO
====================

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
$ php composer require "bratao/prediction-io:1.*@dev"
```

* Add a **provider** in `app/config/app.php`:

```php
    'Bratao\PredictionIO\PredictionServiceProvider'
```

* Add an **alias** in `app/config/app.php`:

```php
    'Prediction'      => 'Bratao\PredictionIO\Facade',
```

* Define your [PredictionIO API endpoint](http://docs.prediction.io/current/tutorials/quickstart-php.html#add-your-app-to-predictionio) in `app/config/services.php`:

```php
	'predictionio' => array(
		'api' => 'http://localhost:8000/',
		'key' => '0250b3f85ce33284f77c77f36b41010ef2c4fc5c',
	),
```
## Usage

```php
<?php

// populate with users, items and actions
Prediction::createUser($userId);
Prediction::createItem($itemId);
Prediction::recordAction($userId, $itemId, 'view');

//Delete a user or a item
Prediction::deleteUser($userId);
Prediction::deleteItem($itemId);

// get recommendations and similar items
$recommendations = Prediction::getRecommendations($userId, $engine, $count);
$similarItems = Prediction::getSimilarItems($itemId, $engine, $count);

```

## License

This bundle is under the MIT license. For the full copyright and license information, please view the LICENSE file that
was distributed with this source code.
