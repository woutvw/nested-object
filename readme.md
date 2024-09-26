# Nested Object for PHP

[![Latest Stable Version](https://poser.pugx.org/woutvanwonterghem/nested-object/v/stable)](https://packagist.org/packages/woutvanwonterghem/nested-object)
[![Total Downloads](https://poser.pugx.org/woutvanwonterghem/nested-object/downloads)](https://packagist.org/packages/woutvanwonterghem/nested-object)
[![License](https://poser.pugx.org/woutvanwonterghem/nested-object/license)](https://packagist.org/packages/woutvanwonterghem/nested-object)

A PHP class that allows you to create nested objects with the flexibility of JSON objects, but with the advantages of PHP classes.

## Installation

Install the package via Composer:

```bash
composer require woutvw/nested-object
```

## Usage

This class allows you to dynamically create nested objects without predefined structures, similar to working with JSON in JavaScript, but maintaining the advantages of PHP.

### Creating a Nested Object

You can create an object with nested properties like this:

```php

use WoutVW\NestedObject;

// Initialize with data
$data = [
    'user' => [
        'name' => 'John Doe',
        'email' => 'john@example.com'
    ],
    'status' => 'active'
];

$object = new NestedObject($data);

// Access nested properties
echo $object->user->name; // Outputs 'John Doe'

// Set new properties
$object->user->age = 30;

```

### Setting values

You can assign new values just like a regular object:

```php

$object->user->city = 'New York';

```

### Converting to an Array

You can convert the nested object back to an array using the toArray() method:

```php

$array = $object->toArray();
print_r($array);

```

## License

[MIT](https://choosealicense.com/licenses/mit/)