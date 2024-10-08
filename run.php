<?php

use Vladislavpk\PriceFinderBot\Services\MainService;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$lol = \Vladislavpk\PriceFinderBot\Services\ArgumentsHandler::getInstance()->readingArguments();
print_r($lol);