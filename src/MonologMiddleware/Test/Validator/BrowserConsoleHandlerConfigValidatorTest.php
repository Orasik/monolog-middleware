<?php


namespace MonologMiddleware\Test;

use MonologMiddleware\Validator\BrowserConsoleHandlerConfigValidator;
use PHPUnit\Framework\TestCase;

class BrowserConsoleHandlerConfigValidatorTest extends TestCase
{

    public function testValidate()
    {
        $configArray = [
            'type'  => 'browser_console',
            'level' => 'INFO',
        ];

        $browserConsoleValidator = new BrowserConsoleHandlerConfigValidator($configArray);
        $this->assertTrue($browserConsoleValidator->validate());
    }
}
