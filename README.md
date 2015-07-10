[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/akDeveloper/json/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/akDeveloper/json/?branch=master) [![Build Status](https://travis-ci.org/akDeveloper/json.svg?branch=master)](https://travis-ci.org/akDeveloper/json)

A json wrapper for php json encode/decode functions

```php
<?php
use Json\JsonArrayDecoder;
use Json\Exception\JsonException;

try {
	$string = '{"name":"value"}';
	$decoder = new JsonArrayDecoder();
	$decoded = $decoder->decode($string);
} catch (JsonException $e) {
	echo $e->getMessage();
}
```
