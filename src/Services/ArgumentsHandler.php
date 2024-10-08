<?php

namespace Vladislavpk\PriceFinderBot\Services;

use Vladislavpk\PriceFinderBot\Services\Traits\ArgumentsHandlerTrait;

class ArgumentsHandler
{
    use ArgumentsHandlerTrait;
    private static self $testInstance;
    private array $arguments = [];
    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (!isset(self::$testInstance)) {
            self::$testInstance = new self;
        }
        return self::$testInstance;
    }

    public function readingArguments()
    {

        global $argv;
        $arguments = [];
        foreach ($argv as $item) {
            $arguments[].= $item;
        }
        return $arguments;
    }

}