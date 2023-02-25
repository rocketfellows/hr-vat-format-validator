# <Country> vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Croatia vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/hr-vat-format-validator
```

## Usage example

Valid Croatia vat number:

```php
$validator = new HRVatFormatValidator();
$validator->isValid('12345678912');
$validator->isValid('HR99999999999');
```

Returns:

```shell
true
true
```

Invalid Croatia vat number:

```php
$validator = new HRVatFormatValidator();
$validator->isValid('999999999999');
$validator->isValid('9999999999');
$validator->isValid('DE99999999999');
```

```shell
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
