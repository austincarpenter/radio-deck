<?php

namespace JaOcero\RadioDeck\Traits;

use Filament\Support\Enums\IconPosition;
use Filament\Support\Enums\IconSize;

trait HasDirection
{
    protected string|Closure|null $direction = null;

    public function direction(string|Closure|null $direction): static
    {
        $this->direction = $direction;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->evaluate($this->direction);
    }

}