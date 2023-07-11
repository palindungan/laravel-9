<?php

// INPUT NILAI DISINI
$countFamily = '5';
$memberFamily = '1 2 4 3 3';

function calculateMinimumBuses($familyMembers) {
    $totalFamilyMembers = array_sum($familyMembers); // Jumlah total anggota keluarga
    $busesNeeded = ceil($totalFamilyMembers / 4); // Jumlah bus yang diperlukan (dibulatkan ke atas)

    return $busesNeeded;
}

// Input: Jumlah anggota keluarga setiap pasangan
$n = intval(trim($countFamily)); // Jumlah keluarga (baca dari input)
$familyMembers = array_map('intval', explode(' ', trim($memberFamily))); // Anggota keluarga setiap pasangan (baca dari input)

// Menghitung jumlah minimum bus yang harus disewa
$totalBuses = calculateMinimumBuses($familyMembers);

// Output: Jumlah minimum bus yang harus disewa atau pesan kesalahan
if ($n === count($familyMembers)) {
    echo "Jumlah minimum bus yang harus disewa: " . $totalBuses;
} else {
    echo "Masukan harus sama dengan jumlah keluarga";
}
