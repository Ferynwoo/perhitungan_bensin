<?php

$nilai = 51;

echo "Nilai : {$nilai} <br>";

if ($nilai >= 90 and $nilai <= 100) {
    echo "A+";
} elseif ($nilai >= 80) {
    echo "A";
} elseif ($nilai >= 70) {
    echo "B+";
} elseif ($nilai >= 60) {
    echo "B";
} elseif ($nilai >= 50) {
    echo "C+";
} elseif ($nilai >= 40) {
    echo "C";
} elseif ($nilai >= 30) {
    echo "C";
} elseif ($nilai >= 20) {
    echo "D+";
} elseif ($nilai >= 10) {
    echo "D";
}
