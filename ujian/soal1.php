<?php

function sortCharactersByType($string) {
    $string = strtolower($string); // Convert the string to lowercase
    $characters = str_split($string); // Convert the string to an array of characters
    $vowels = array();
    $consonants = array();

    foreach ($characters as $character) {
        if ($character != ' ') { // Ignore white spaces
            if (isVowel($character)) {
                $vowels[] = $character;
            } else {
                $consonants[] = $character;
            }
        }
    }

    sort($vowels); // Sort the vowel array
    sort($consonants); // Sort the consonant array

    $sortedVowels = implode('', $vowels); // Convert the sorted vowel array back to a string
    $sortedConsonants = implode('', $consonants); // Convert the sorted consonant array back to a string

    return array('vowels' => $sortedVowels, 'consonants' => $sortedConsonants);
}

function isVowel($character) {
    $vowels = array('a', 'e', 'i', 'o', 'u');
    return in_array($character, $vowels);
}

// Example usage
$inputString = "Sample Case";
$sortedCharacters = sortCharactersByType($inputString);
echo "Original string: " . $inputString . "<br>";
echo "Sorted vowels: " . $sortedCharacters['vowels'] . "<br>";
echo "Sorted consonants: " . $sortedCharacters['consonants'];

echo "<br>";
echo "<br>";

// Example usage
$inputString = "Next Case";
$sortedCharacters = sortCharactersByType($inputString);
echo "Original string: " . $inputString . "<br>";
echo "Sorted vowels: " . $sortedCharacters['vowels'] . "<br>";
echo "Sorted consonants: " . $sortedCharacters['consonants'];


?>
