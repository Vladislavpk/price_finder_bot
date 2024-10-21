<?php

namespace app\Services;

class HashMode
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

    public function hashData(string $text):string
    {
        return hash('sha256',$text,true);
    }
}