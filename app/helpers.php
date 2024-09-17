<?php

use Illuminate\Support\Facades\Crypt;

if (!function_exists('encryptId')) {
    function encryptId($id)
    {
        return Crypt::encryptString($id);
    }
}

if (!function_exists('decryptId')) {
    function decryptId($encryptedId)
    {
        try {
            return Crypt::decryptString($encryptedId);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return null; // or handle the exception as needed
        }
    }
}
