<?php

namespace Vladislavpk\PriceFinderBot\Services;

class MainService
{
    private static self $testInstance;



    public static function getInstance()
    {
        if (!isset(self::$testInstance)) {
            self::$testInstance = new self;
        }
        return self::$testInstance;
    }
    private function __construct()
    {

    }
}