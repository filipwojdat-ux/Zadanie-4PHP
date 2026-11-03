<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sumaWszystkich = 0;
$sumaParzystych = 0;
$sumaNieparzystych = 0;
$iloscPodzielnychPrzez3 = 0;

for ($i = 1; $i <= 100; $i++) {
    
    $sumaWszystkich += $i;
    
    if ($i % 2 === 0) {
        $typ = "parzysta";
        $sumaParzystych += $i;
    } else {
        $typ = "nieparzysta";
        $sumaNieparzystych += $i;
    }
    
    $podzielnaPrzez3 = "";
    if ($i % 3 === 0) {
        $podzielnaPrzez3 = ", podzielna przez 3";
        $iloscPodzielnychPrzez3++;
    }
    
    echo $i . " - " . $typ . $podzielnaPrzez3 . "<br>";
}

echo "<br><strong>Podsumowanie:</strong><br>";
echo "Suma wszystkich liczb: " . $sumaWszystkich . "<br>";
echo "Suma liczb parzystych: " . $sumaParzystych . "<br>";
echo "Suma liczb nieparzystych: " . $sumaNieparzystych . "<br>";
echo "Liczb podzielnych przez 3: " . $iloscPodzielnychPrzez3 . "<br>";
?>
    
</body>
</html>