# Array Helpers

Simple implementation of Laravel Array Helpers in php.

## Installation

Use git clone.

```bash
git clone https://github.com/rohanshukla9/php-array-helpers
```

## Usage

```php
<?php


require 'vendor/autoload.php';


$user = [
  'name' => 'Backend Development',
  'topics' => [
    ['title' => 'Database memes'],
    ['title' => 'N+1 query memes']
  ],
  'country' => [
    'name' => 'IN',
  ],
  'upvotes' => '420',
];

echo array_get($user, 'country.name'); # IN
echo array_get($user, 'topics.1.title'); # N+1 query memes
```

## TODO

Array First
Array Last
Array Has
Array Where
Array Only
Array Forget

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)
