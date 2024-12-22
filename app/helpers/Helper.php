<?php

if(!function_exists('currency_IDR')){
    function currency_IDR($value){
        return "Rp. " .number_format($value, 0, ',', ',');
    }
}

if(!function_exists('randomStrig')){
    function generateRandomString($length = 6){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}
?>
