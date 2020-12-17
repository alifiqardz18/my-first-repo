<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentukan Nilai</title>
</head>
<body>
<?php

echo "<h1> Tentukan Nilai PHP </h1> <br> <br>";

/* 
buatlah sebuah file dengan nama tentukan-nilai.php. Di dalam file tersebut buatlah function dengan nama tentukan_nilai yang menerima parameter berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

function tentukan_nilai($number)
{
    //  kode disini
    if ($number >= 85 && $number <= 100) {
        return "Sangat Baik! <br>";
    } else if ($number < 70 && $number <= 85) {
        return "Baik! <br>";
    } else if ($number >= 60 && $number <= 70) {
        return "Cukup! <br>";
    } else {
        return "Kurang! <br>";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang




?>
</body>
</html>