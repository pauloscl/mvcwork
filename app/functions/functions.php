<?php

function dd($params = [], $die = true)
{
    echo '<pre>';
    print_r($params);

    if ($die) die();
}