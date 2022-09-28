<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);

}
if (!empty($_POST ['naam'])&& !empty($_POST['bedrag']) && !empty($_POST['btw'])){
    $bedrag=filter_input(INPUT_POST, 'bedrag', FILTER_VALIDATE_FLOAT);
    $btw=filter_input(INPUT_POST, 'btw', FILTER_VALIDATE_FLOAT);