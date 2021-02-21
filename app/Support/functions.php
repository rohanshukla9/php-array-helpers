<?php


use App\Support\Arr;

function array_get($array, $key, $default = null)
{
  return Arr::get($array, $key, $default);
}
