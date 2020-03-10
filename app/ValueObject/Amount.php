<?php

namespace App\ValueObject;

class Amount
{
    public int $primary;
    public int $secondary;
    public string $separator;
    public string $symbol;
    public string $currency;

    public function __toString(): string
    {
        return $this->symbol . $this->primary . $this->separator . $this->secondary;
    }
}
