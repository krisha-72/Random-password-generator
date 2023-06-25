<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;


final class PasswordGeneratorTest extends TestCase
{
    public function testStringContainsCapitalLetter()
    {
        $string = 'hello world';

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('The string should contain at least one capital letter.');
        
        $this->assertStringContainsCapitalLetter($string);
    }

    public function testStringContainsSmallLetter(){
    	 $string = 'HELLO WORLD';
    	$this->expectException(\Exception::class);
        $this->expectExceptionMessage('The string should contain at least one small letter.');

        $this->assertStringContainsSmallLetter($string);
    }

    public function testStringContainsDigit()
	{
	    $string = 'HELLO';

	    $this->expectException(\Exception::class);
	    $this->expectExceptionMessage('The string should contain at least one digit.');

	    $this->assertStringContainsDigits($string);
	}

    public function testStringContainsSpecialCharacter(){
    	$specialCharacter = '!'||'@'||'#'||'$'||'%'||'^'||'&'||'*'||'('||')';
    	$string = 'HELLO WORLD';
    	$this->expectException(\Exception::class);
        $this->expectExceptionMessage('The string should contain at least one special character.');

        $this->assertStringContainsdSpecialChar($string);

    }


    
    public function assertStringContainsCapitalLetter($string)
    {
        if (!preg_match('/[A-Z]/', $string)) {
            throw new \Exception("The string should contain at least one capital letter.");
        }
    }

    public function assertStringContainsSmallLetter($string)
    {
        if (!preg_match('/[a-z]/', $string)) {
            throw new \Exception("The string should contain at least one small letter.");
        }
    }

    public function assertStringContainsDigits($string)
    {
        if (!preg_match('/[0-9]/', $string)) {
            throw new \Exception("The string should contain at least one digit.");
        }
    }

    public function assertStringContainsdSpecialChar($string)
    {

        if (!preg_match($specialCharacter, $string)) {
            throw new \Exception("The string should contain at least one special char.");
        }
    }
}
