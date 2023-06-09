# ETNAFAKER PACKAGE

[![Latest Version](https://img.shields.io/github/release/millooo94/etna-faker.svg?style=flat-square)](https://github.com/millooo94/etna-faker/releases) [![Issues](https://img.shields.io/github/issues/millooo94/etna-faker.svg?style=flat-square)](https://github.com/millooo94/etna-faker/issues) [![Stars](https://img.shields.io/github/stars/millooo94/etna-faker.svg?style=flat-square)](https://github.com/millooo94/etna-faker/stargazers)

## Overview
Etna Faker is a PHP library designed to generate realistic fake data specific to the Catania region in Italy. It provides developers with a convenient way to generate fake Catania-related data for various purposes such as testing, prototyping, or populating databases with sample data.

The library follows the principles and conventions of the PHP community, ensuring compatibility with existing PHP projects and frameworks. Etna Faker leverages the power of Faker, a widely-used PHP library for generating fake data, and extends it with Catania-specific data generation capabilities.

## Features
- **First Names**: Generate realistic first names specific to the Catania province.

- **Last Names**: Generate realistic last names specific to the Catania province.

- **Addresses**: Create realistic Catania addresses with random street names and house numbers.

- **Cities**: Create realistic Catania cities specific to the Catania province.

- **Emails**: Generate realistic emails containing first and last names specific to the Catania province.

## Installation
You can install Etna Faker using Composer, the dependency management tool for PHP:
```php
composer require millooo94/etna-faker
```
## Usage
To start using Etna Faker, include the library in your PHP script using the autoload functionality provided by Composer:
```php
use Millooo94\EtnaFaker\Faker\EtnaFaker;
```
After including the library, you can create an instance of the EtnaFaker\Factory class to access the various data generation methods:
```php
$faker = new EtnaFaker();
```
You can then use the $faker object to generate Catania-specific fake data:
```php
// Generate a realistic Catania first name
$firstName = $faker->firstName();

// Generate a realistic Catania last name
$lastName = $faker->lastName();

// Generate a realistic Catania city
$city = $faker->city();

// Generate a realistic Catania address
$address = $faker->address();

// Generate a realistic Catania email
$email = $faker->email();
```
Refer to the [**documentation**](https://github.com/millooo94/etna-faker#etnafaker-package) for more details on available methods and customization options.
## Contributing
Contributions to Etna Faker are welcome! If you find a bug, have a feature request, or want to contribute improvements or new data generation capabilities, please open an issue on the [**GitHub repository**](https://github.com/millooo94/etna-faker) or submit a pull request.

Please ensure that your contributions align with the coding style and guidelines of the project. Also, provide appropriate tests and documentation for your changes.









