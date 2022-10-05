<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['naam']) && empty($_POST['films'])) {
        echo "vul je naam en maak een keuze!";
    } else {
        session_start();
        $naam = $_POST['naam'];
        $_SESSION ['naam'] = $naam;
        $films = $_POST['films'];
        switch ($films) {
            case "1":$_SESSION['films'] = "Spide-Man: No Way Home";break;
            case "2":$_SESSION['films'] = "Doctor Strange in The Multiverse Of Madness";break;
            case "3":$_SESSION['films'] = "Avatar ";break;
            case "4":$_SESSION['films'] = "Don`t Look up";break;
            case "5":$_SESSION['films'] = "Jumanji: The Next level";
        }

                header('location: films.php');

    }
}
?>
<!DOCTYPE>
<html lang="nl">
<head>
    <title>oefen2</title>
</head>
<body>
<form method="post" action="films.php">
    <h1>Film:</h1>
    <label>Naam</label>
    <input  type="text" name="naam" value=""/>
    <br>
    <p>wat is je film keuze:</p>
    <input name="films" type="radio"  value="Spide-Man: No Way Home"/>Spide-Man: No Way Home <br>
    <input name="films" type="radio"  value="Doctor Strange in The Multiverse Of Madness"/>Doctor Strange in The Multiverse Of Madness <br>
    <input name="films" type="radio"  value="Avatar"/>Avatar <br>
    <input name="films" type="radio"  value="Don`t Look up"/>Don`t Look up<br>
    <input name="films" type="radio"  value="Jumanji: The Next level"/>Jumanji: The Next level
    <br><br>
    <input type="submit" name="keuze verzenden" value="Keuze verzenden">
</form>
</body>
</html>
