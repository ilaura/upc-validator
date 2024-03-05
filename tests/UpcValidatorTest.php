<?php

namespace Ilaura\UpcValidator\Tests;

use Ilaura\UpcValidator\UpcValidator;
use PHPUnit\Framework\TestCase;

class UpcValidatorTest extends TestCase
{
    public function testValidate()
    {
        $this->assertTrue(UpcValidator::validate('123456789012'));
        $this->assertFalse(UpcValidator::validate('123432131231231256789012'));
        $this->assertFalse(UpcValidator::validate('123456a89012'));
    }
}
