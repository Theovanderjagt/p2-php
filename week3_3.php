
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$today = date ("l F Y");
echo "het is vandaag: ";
echo $today;
echo "<br>";

$days = date("z") + 1 ;
echo "het is vandaag de $days e dag van het jaar.";
echo "<br>";

$week = date("w");
$day = date("l");
echo "$day is de $week e dag van de week.";
echo "<br>";



$month = date("F");
$daysInMonth = date("t");
echo "De maand $month heeft in totaal $daysInMonth dagen.";
echo "<br>";

$fuck = date("L");
$year = date("Y");

if ($fuck == 0) {
    echo "Het jaar $year is geen schrikkeljaar.";
};

if($fuck == 1) {
    echo "Het jaar $year is een schrikkeljaar.";
};
?>

   
</body>
</html>



