Laravel PredictionIO
====================

*Based on [endroid](http://endroid.nl/)*


The Endroid PredictionIO library provides a client which offers easy access to a PredictionIO recommendation engine.
PredictionIO is an open source machine learning server for software developers to create predictive features, such as
personalization, recommendation and content discovery.

Through a small set of simple calls, all server functionality is exposed to your application. You can add users and items,
register actions between these users and items and retrieve recommendations deduced from this information by any
[`PredictionIO`](http://prediction.io/) recommendation engine. Applications range from showing recommended products in a
web shop to discovering relevant experts in a social collaboration network.

## Requirements

* Symfony
* Dependencies:
 * [`PredictionIO-PHP-SDK`](https://github.com/PredictionIO/PredictionIO-PHP-SDK)

## Usage

```php
<?php

$client = new Endroid\PredictionIO\PredictionIO($appKey, $apiUrl);

// populate with users, items and actions
$client->createUser($userId);
$client->createItem($itemId);
$client->recordAction($userId, $itemId, 'view');

// get recommendations and similar items
$recommendations = $client->getRecommendations($userId, $engine, $count);
$similarItems = $client->getSimilarItems($itemId, $engine, $count);

```

## Vagrant box

PredictionIO provides a [`Vagrant box`](http://docs.prediction.io/current/installation/install-predictionio-with-virtualbox-vagrant.html)
containing an out-of-the-box PredictionIO server.

## Symfony

You can use [`EndroidPredictionIOBundle`](https://github.com/endroid/EndroidPredictionIOBundle) to enable this service in your Symfony application.

## License

This bundle is under the MIT license. For the full copyright and license information, please view the LICENSE file that
was distributed with this source code.
