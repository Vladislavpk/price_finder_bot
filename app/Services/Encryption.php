<?php

namespace app\Services;

class Encryption
{
    private static self $instance;

    private function __construct()
    {

    }

    public static function getInstance():self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function encryptionData(string $text):string
    {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length( "AES-128-CBC"));
        return openssl_encrypt($text, "AES-128-CBC", "Klych", iv: $iv);
    }
    public function decryptionData(string $text):string
    {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length( "AES-128-CBC"));
       return openssl_decrypt($text, "AES-128-CBC", "Klych", iv: $iv);
    }
}