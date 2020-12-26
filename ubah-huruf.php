<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf PHP</title>
</head>
<body>

<?php

echo "<h1> Ubah Huruf PHP </h1> <br> <br>";

/* 
buatlah sebuah file dengan nama ubah-huruf.php. Di dalam file tersebut buatlah sebuah function dengan nama ubah_huruf yang menerima parameter berupa string. function akan mereturn string yang berisi karakter-karakter yang sudah diubah dengan karakter setelahnya dalam susunan abjad “abdcde …. xyz”. Contohnya karakter “a” akan diubah menjadi “b” karakter “x” akan berubah menjadi “y”, dst.
*/

function ubah_huruf($string){
//kode di sini
// for ($i = 0; $i < strlen($string); $i++) {

//     /* 
//     ord() untuk konversi string ke angka
//     chr() untuk konversi angka ke string
//     */
//     $new_string[$i] = chr(ord($string[$i]) + 1);
// }
// // implode() untuk konversi array ke string
// return implode($new_string). '<br>';

$abjad = "abcdefghijklmnopqrstuvwxyz";
$output = "";

for ($i = 0; $i < strlen($string); $i++) {
    $position = strpos ($abjad, $string[$i]);
    $output .= substr ($abjad, $position + 1, 1);
}
return "$output <br>";

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>

</body>
</html>