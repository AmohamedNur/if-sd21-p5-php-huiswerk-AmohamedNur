<?php
session_start();
if (isset($_POST['submit'])){
    if (empty($_POST ['naam']) && empty($_POST['mail']) && empty($_POST['klas'])) {
        echo "Vul je gegevens in !";
    }
    if (empty($_POST['g'])){
        echo "Vul een keuze in!";
    }
    if (empty($_POST['akkord'])){
        echo "Ga akkord met de voorwaarden";
    }
    else{
        $_SESSION ['naam']= $_POST['naam'];
        $_SESSION ['mail']= $_POST['mail'];
        $_SESSION ['klas']= $_POST['klas'];
        $_SESSION ['g']= $_POST['g'];

        header('location: extra.php');
    }
}
?>
<!DOCTYPE>
<html lang="nl">
 <head>
     <title>Extra oefening PHP formulieren</title>
 </head>
 <link rel="stylesheet" href="style.css">
 <body>
 <div class="form1">
 <form method="post" action="extra.php">
     <h1>Inschrijfformulier Werkshop</h1>
     Naam: <input type="text" name="naam"> <br> <br>
     Email: <input type="text" name="mail"> <br> <br>
     klas: <input type="text" name="klas"> <br> <br>

     <p>Workshops</p>
     <input name="g" type="radio"  value="Drones"/>Drones <br>
     <input name="g" type="radio"  value="raspery Pi"/>Raspery Pi <br>
     <input name="g" type="radio"  value="Security"/>Security <br> <br>
     <input name="akkord" type="checkbox" value="accepteren"/> ik ga akkord met de voorwaarden <br> <br>

     <input type="submit" name="inschrijven" value="Inschrijven">
 </form>
 </div>
 </body>
</html>


<?php
