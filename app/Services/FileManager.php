<?php

namespace app\Services;

class FileManager
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

    public function getDataFromFile(string $path): string
    {
        return file_get_contents($path);
    }

    public function writeDataToFile(string $path, string $text): void
    {
        file_put_contents($path, $text);
    }
}