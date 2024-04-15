# Tischtennis Live PHP Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kayschima/tischtennis-live-php.svg?style=flat-square)](https://packagist.org/packages/kayschima/tischtennis-live-php)
[![Tests](https://img.shields.io/github/actions/workflow/status/kayschima/tischtennis-live-php/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kayschima/tischtennis-live-php/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/kayschima/tischtennis-live-php.svg?style=flat-square)](https://packagist.org/packages/kayschima/tischtennis-live-php)

Dies ist ein ein PHP-Wrapper für die Tischtennis Live API.


## Installation

Du kannst das Package via composer installieren:

```bash
composer require kayschima/tischtennis-live-php
```

## Benutzung

```php
<?php

require 'vendor/autoload.php';

use Kayschima\TischtennisLive\TischtennisLive;

$tischtennis_live = new TischtennisLive(
    baseurl: 'https://segeberg.tischtennislive.de/',
    teamId: 113261,
    wettbewerbId: 17846,
    runde: 2
);

foreach ($tischtennis_live->tabelle() as $team) {
    echo 'Platz ' . $team['Platz'] . ': ' . $team['Mannschaft'] . PHP_EOL;
}

var_dump($tischtennis_live->spielplan());
var_dump($tischtennis_live->bilanz());
```

## Testing

```bash
composer test
```

## Changelog

Im [CHANGELOG](CHANGELOG.md) erhältst du mehr Informationen über Veränderungen der letzten Zeit..

## Mitmachen

Wenn du den Wrapper erweitern willst, erstelle bitte ein Issue oder einen Pull Request.

## Sicherheitsrisiken

Wenn dir sicherheitsrelevante Dinge auffallen sollten, erstelle bite ein Issue oder einen Pull Request. 

## Credits

- [Kay Markschies](https://github.com/kayschima)

## License

Es findet die MIT License (MIT) Anwendung. Lies dir das [License File](LICENSE.md) für weitere Informationen durch.
