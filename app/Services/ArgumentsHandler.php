<?php

namespace app\Services;

class ArgumentsHandler
{
    private static self $instance;
    private array $arguments;
    private function __construct()
    {
        $this->readArguments();
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    private function setArguments(array $newArguments): void
    {
        $this->arguments = $newArguments;
    }

    private function readArguments(): void
    {
        $this->setArguments(getopt(
            "hv",
            [
                "input_file:",
                "mode:",
                "output_file:"
            ]
        ));
    }

    public function getInputFilePath(): ?string
    {
        return $this->getArguments()["input_file"] ?? null;
    }
}