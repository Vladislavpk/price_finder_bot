<?php

namespace app\Services;

class Base64Mode
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

    public function base64Encode(string $text):string
    {
        return base64_encode($text);
    }

    public function base64Decode(string $encodeText):string
    {
        return base64_decode($encodeText);
    }

}