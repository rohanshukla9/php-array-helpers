<?php


require 'vendor/autoload.php';


$user = [
  'name' => 'Rohan',
  'topics' => [
    ['title' => 'High memes'],
    ['title' => 'Life is memes']
  ],
  'country' => [
    'name' => 'IN',
  ],
  'upvotes' => '420',
];

echo array_get($user, 'country.name'); //IN
echo array_get($user, 'topics.0.title'); //IN