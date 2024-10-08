<?php

namespace Vladislavpk\PriceFinderBot\Services\Traits;

trait ArgumentsHandlerTrait
{
    private function getArguments(): array
    {
        return $this->arguments;
    }

    private function setArguments(array $newArguments): void
    {
        $this->arguments = $newArguments;
    }
}