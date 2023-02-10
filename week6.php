<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form method="post" action="">
<label for="price">Bedrag Exclusief BTW</label>
<input type="number" name="amount" id="amount" required>
<br>
<input type="radio" name="vat" id="vatlow" value="low">
<label for="vatlow">Laag, 9%</label>
<br>
<input type="radio" name="vat" value="high">
<label for="vathigh">Hoog, 21%</label>
<br>
<button type="submit" name="submit" id="submit" value="submit">Uitrekenen</button>
</form>

<?php

if (isset($_POST['submit']) && $_POST['vat'] == "low") {
    $amount = $_POST["amount"] * 1.09;
    echo  "Bedrag inclusief 9 BTW: € ". number_format($amount, 2,);
} elseif (isset($_POST['submit']) && $_POST['vat'] == "high") {
    $amount = $_POST["amount"] * 1.21;
    echo  "Bedrag inclusief 21 BTW: € $amount";
}





?>

</body>
</html>
