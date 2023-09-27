<?php 
// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

function generatePassword($length){
//Lower Case
$lowerCase = "abcdefghijklmnopqrstuvwxyz";
$lowerCaseSuffled = str_shuffle($lowerCase);
$lowerCaseFinal  = substr($lowerCaseSuffled,0,4);

//Upper Case;
$upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$upperCaseSuffled = str_shuffle($upperCase);
$upperCaseFinal  = substr($upperCaseSuffled,0,4);

//Numbers;
$numberS = "1234567890";
$numberSSuffled = str_shuffle($numberS);
$numberSFinal  = substr($numberSSuffled,0,4);

//Special Characters;
$SpecialCharacters = "(!@#$%^&*()_+)";
$SpecialCharactersSuffled = str_shuffle($SpecialCharacters);
$SpecialCharactersFinal  = substr($SpecialCharactersSuffled,0,4);


// Final Password
$Password = "{$lowerCaseFinal}{$upperCaseFinal}{$numberSFinal}{$SpecialCharactersFinal}";
$PasswordSuffled= str_shuffle($Password);
$generatePassword=substr($PasswordSuffled,0,$length);

return $generatePassword;

}

echo "Genrated Password is: ". generatePassword(12);




?>