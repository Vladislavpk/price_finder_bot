<?php

use app\Services\ArgumentsHandler;
use app\Services\FileManager;
use app\Services\MainService;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//print_r(ArgumentsHandler::getInstance()->getInputFilePath());
//$text = FileManager::getInstance()->reading();
//FileManager::getInstance()->recording($text);
print_r(ArgumentsHandler::getInstance()->getArguments());