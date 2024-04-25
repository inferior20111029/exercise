<?php

/**
 *
 * @param  mixed  
 * @param  string 
 * @param  mixed 
 * @return mixed
 */
function data_get($target, $key, $default = null) 
{
    if ($key === null) {
        return $target;
    }

    if (!is_array($key)) {
        $key = explode('.', $key);
    }

    foreach ($key as $segment) {
        if (is_array($target) && array_key_exists($segment, $target)) {
            $target = $target[$segment];
        } else {
            return $default;
        }
    }

    return $target;
}
