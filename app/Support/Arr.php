<?php

namespace App\Support;

use ArrayAccess;

class Arr
{

  public static function canAccess($array)
  {
    return is_array($array) || $array instanceof ArrayAccess;
  }

  public static function exists($array, $key)
  {
    if ($array instanceof ArrayAccess) {
      return $array->offsetExists($key);
    }

    return array_key_exists($key, $array);
  }

  public static function get($array, $key, $default = null)
  {
    # code...

    // is array iterable?

    if (!static::canAccess($array)) {
      //print_r('hi');
      return $default;
    }

    //is key null?

    if (is_null($key)) {
      return $array;
    }

    //if 1st level exists, return

    if (static::exists($array, $key)) {
      return $array[$key];
    }

    // var_dump(explode('.', $key));
    // die();


    // iterate down and findthe value

    foreach (explode('.', $key) as $segment) {

      if (static::canAccess($array) && static::exists($array, $segment)) {

        $array = $array[$segment];
      } else {
        return $default;
      }
    }
    // return

    return $array;
  }
}
