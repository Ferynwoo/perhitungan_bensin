<?php
$siswa = array("Ani", "Jena", "Febri", "Eka", "Arif", "Yanto");

// Menggunakan For Loop
for($i = 0; $i < count($siswa); $i++){
    echo $siswa[$i] . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


    
// Menggunakan Foreach loop
foreach($siswa as $value) {
    echo $value . "<br>";
}
