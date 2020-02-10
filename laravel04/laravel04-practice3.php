<?php

function array_multiplication($arr) {
    $result = array_product($arr);
    return $result;
}

echo array_multiplication(array(1,3,5,7,9));