<?php
namespace src;

class RandomPasswordGenerator
{
    public function generateStrongPassword($length = 8)
    {
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+=-{}[]|:;<>?,./';
        $password = '';
        $password .= $this->getRandomCharacter($uppercase);
        $password .= $this->getRandomCharacter($lowercase);
        $password .= $this->getRandomCharacter($numbers);
        $password .= $this->getRandomCharacter($specialChars);
        $remainingLength = $length - 4;
        for ($i = 0; $i < $remainingLength; $i++) {
            $characterSet = $uppercase . $lowercase . $numbers . $specialChars;
            $password .= $this->getRandomCharacter($characterSet);
        }
        return str_shuffle($password);
    }
    public function getRandomCharacter($characterSet)
    {
        $characterSetLength = strlen($characterSet);
        $randomIndex = random_int(0, $characterSetLength - 1);
        return $characterSet[$randomIndex];
    }
}

// $passwordGenerator= new RandomPasswordGenerator();
// $generatedPassword = $passwordGenerator->generateStrongPassword();

// var_dump($generatedPassword);