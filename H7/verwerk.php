<?php
if (!empty($_POST ['naam'])&& !empty($_POST['bedrag']) && !empty($_POST['btw'])){
    $bedrag=filter_input(INPUT_POST, 'bedrag', FILTER_VALIDATE_FLOAT);
    $btw=filter_input(INPUT_POST, 'btw', FILTER_VALIDATE_FLOAT);
}

if ($bedrag === false || $btw===false) {
    echo "Bedrag is niet een kommegetal of de btw is geen getal";
} else {
    if ($btw===6) {
        $bedragIncl=$bedrag*1.06;
    } else {
        $bedragIncl=$bedrag*1.21;
    }
    echo "Het is bedrag is exclusief btw is" .$bedrag. "<br>";
    echo "De btw is " .$btw. "%<br>";
    echo "Het bedrag is inclusief btw is " .$bedragIncl. "<br>";
}

