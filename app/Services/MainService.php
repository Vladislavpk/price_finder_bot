<?php

namespace app\Services;

class MainService
{
    private static self $instance;

    private function __construct()
    {

    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function adc()
    {
       $path = ArgumentsHandler::getInstance()->getInputFilePath();
       $data = FileManager::getInstance()->getDataFromFile($path);
       print_r($data);
    }

}