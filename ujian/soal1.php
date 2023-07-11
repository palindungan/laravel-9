<?php
function sortCharacter($str) {
    $str = strtolower($str); // Mengubah string menjadi huruf kecil
    $vowels = '';
    $consonants = '';

    // Memisahkan karakter vokal dan konsonan
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
                $vowels .= $char;
            } else {
                $consonants .= $char;
            }
        }
    }

    // Mengurutkan karakter vokal dan konsonan berdasarkan urutan kemunculan
    $vowels = str_split($vowels);
    $consonants = str_split($consonants);

    // Mengurutkan karakter vokal dan konsonan sesuai urutan kemunculan
    $charCounts = array_count_values(array_merge($vowels, $consonants));
    $sortedVowels = '';
    $sortedConsonants = '';
    foreach ($charCounts as $char => $count) {
        if (in_array($char, $vowels)) {
            $sortedVowels .= str_repeat($char, $count);
        } else {
            $sortedConsonants .= str_repeat($char, $count);
        }
    }

    return array($sortedVowels, $sortedConsonants);
}

// INPUT NILAI DISINI
$input = "Sample Case";
list($vowels, $consonants) = sortCharacter($input);

echo "Masukkan satu baris kata: " . $input . "<br>";
echo "Karakter Vokal:<br>";
echo $vowels . "<br>";
echo "Karakter Konsonan:<br>";
echo $consonants . "<br>";

echo "<br><br>";

$input = "Next Case";
list($vowels, $consonants) = sortCharacter($input);

echo "Masukkan satu baris kata: " . $input . "<br>";
echo "Karakter Vokal:<br>";
echo $vowels . "<br>";
echo "Karakter Konsonan:<br>";
echo $consonants . "<br>";
?>
