<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 


$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo $riel;
echo "\n";
echo $kyat;
echo "\n";
echo $krones;
echo "\n";
echo $lek;


$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

echo "\n";
echo $riel_to_usd;
echo "\n";
echo $kyat_to_usd;
echo "\n";
echo $krones_to_usd;
echo "\n";
echo $lek_to_usd;
echo "\n";

$usd_from_riel = $riel * $riel_to_usd;
echo "\nYour $riel were exchanged for $riel_to_usd usd.";
$usd_from_kyat = $kyat * $kyat_to_usd;
echo "\nYour $kyat were exchanged for $kyat_to_usd usd.";
$usd_from_krones = $krones * $krones_to_usd;
echo "\nYour $krones were exchanged for $krones_to_usd usd.";
$usd_from_lek = $lek * $lek_to_usd;
echo "\nYour $lek were exchanged for $lek_to_usd usd.";


$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";
echo "\n";












?>
    
</body>
</html>