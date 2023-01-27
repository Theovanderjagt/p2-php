<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main> 
<h2> Vul onderstaand formulier in en druk op inleveren</h2>
<fieldset>
    <label class="labelfield" for="fname">Voornaam</label>
    <input class="formfield" type="text"name="fname">
    <label class="labelfield" for="iname">Achternaam</label>
    <input class="formfield" type="text"name= "iname">
    </fieldset>
    <fieldset>
        <label class="radiobuttons" for="gender">Geslacht</label>
        Man <input class="radiotype" type="radio" name="gender" value="female">
        onbekend  <input class="radiotype" type="radio" name="gender" value="onbekend">
    </fieldset>
<input type="submit" name="sendbutton" id="submit" value="inleveren">

</form>
<?php 
if (isset($_POST["sendbutton"])) {
    echo "<p>Submit button ingedrukt</p>"
    echo
}





</main>




</body>
</html>