<?php

namespace Ilaura\UpcValidator;

class UpcValidator
{
    public static function validate(string $upc): bool
    {
        return (strlen($upc) === 12 && is_numeric($upc));
    }
}