<?php
var_dump($_POST);
if(isset($_GET['uitrekenen'])) {

    if (!empty($_POST ['getal1']) && !empty($_POST['operator']) && !empty($_POST['getal2'])) {

        $getal1 = filter_input(INPUT_POST, 'getal1', FILTER_VALIDATE_FLOAT);
        $getal2 = filter_input(INPUT_POST, 'getal2', FILTER_VALIDATE_FLOAT);
        $operator = filter_input(INPUT_POST, 'operator');
    }
    if ($operator=='optellen') {
         echo $ans=$getal1+$getal2;
    } else if ($operator=='min') {
        echo $ans=$getal1-$getal2;
    }else if ($operator=='maal') {
        echo $ans=$getal1*$getal2;
    } else if ($operator=='delen'){
        echo $ans=$getal1/$getal2;
} else {
     echo "error";
    }
}

?>


<!DOCTYPE>
<html lang="nl">
<head>
    <title>Opdracht2</title>
</head>
<body>
<form method="post">
    <label for="getal1">Getal 1</label>
    <input id="getal1" type="text" name="getal1" value=""/>
    <br>
    <input class="nostyle" type="radio" name="operator" value="optellen"/> optellen
    <input class="nostyle" type="radio" name="operator" value="min"/> Aftrekken
    <input class="nostyle" type="radio" name="operator" value="maal"/> Vermenigvulding
    <input class="nostyle" type="radio" name="operator" value="delen"/> Delen
    <br>
    <label for="getal2">Getal 2</label>
    <input id="getal2" type="text" name="getal2" value=""/>
    <br><br>

    <input type="submit" name="uitrekenen" value="Berekenen">
</form>
</body>
</html>
<?php
