<?php
if (!empty($_POST ['prijs']) && !empty($_POST['korting'])) {
    $prijs = filter_input(INPUT_POST, 'prijs', FILTER_VALIDATE_FLOAT);
    $korting = filter_input(INPUT_POST, 'korting', FILTER_VALIDATE_FLOAT);

    $Uitrekenen = $_POST['prijs'] - ($_POST['prijs'] * ($_POST['korting'] / 100));
    echo "Bedrag inclusief " .$korting. "%<br> €" .$Uitrekenen ;
}





