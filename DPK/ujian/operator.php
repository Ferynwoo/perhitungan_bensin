<?php

// nomer 5

$a = 10;
$b = 5;

if ($a === $b) {
    echo 'benar';
} else {
    echo 'salah';
}
echo "<br>";

echo "ver new";
echo "<br>";

for ($i = 0; $i; $i++){
    if ($i <3) {
        $nilai = "salah";
}
    elseif ($i == 1){
        $nilai = "benar";
}
    else {
        $nilai = "tidak valid";
}
    echo "$nilai";
}
