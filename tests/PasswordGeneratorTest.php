<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use src\RandomPasswordGenerator;
require_once './src/RandomPasswordGenerator.php'; 


final class PasswordGeneratorTest extends TestCase
{
    public function testGenerateStrongPassword()
    {
        $passwordGenerator = new RandomPasswordGenerator();
        $strongPassword = $passwordGenerator->generateStrongPassword();
        $this->assertMatchesRegularExpression('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])[\w\W]{8,}$/', $strongPassword);
    }

}
