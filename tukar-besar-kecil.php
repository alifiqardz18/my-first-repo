<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar Besar Kecil PHP</title>
</head>
<body>

<?php

echo "<h1> Tukar Besar Kecil PHP </h1> <br> <br>";

/* 
buatlah sebuah file dengan nama tukar-besar-kecil.php. Di dalam file tersebut buatlah function dengan nama tukar_besar_kecil yang menerima parameter berupa string. function akan mengembalikan sebuah string yang sudah ditukar ukuran besar dan kecil per karakter yang ada di parameter. Contohnya jika parameter “pHp” maka akan mengembalikan “PhP”.
*/

function tukar_besar_kecil($string){
//kode di sini
$abjad = "abcdefghijklmnopqrstuvwxyz";
$output = "";
for ($a = 0; $a < strlen($string); $a++) {
    $huruf_kecil = strpos($abjad, $string[$a]);
    if ($huruf_kecil == null) {
        $output .= strtolower ($string[$a]); 
    } else {
        $output .= strtoupper ($string[$a]);
    }
}
return "$output <br>";

}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>

</body>
</html>