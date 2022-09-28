<?php
if (isset($_POST ['inschrijven'])) {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $klas = $_POST['klas'];

    if (!empty($_POST ['naam'])) {
        echo "vul jouw naam in!";
    }
    if (!empty($_POST ['email']) && ) {
        echo "vul jouw email in!";
    }
    if (!empty($_POST ['klas'])) {
        echo "vul jouw klas in!";
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
   <h1>Inschrijfformulier Werkshop</h1>
 <form method="post">
     <label>Naam:</label>
     <input type="text" name="naam">
     <br>
     <label>Email:</label>
     <input type="text" name="email">
     <br>
     <label>Klas:</label>
     <input type="text" name="klas">
     <br>
     <label>Workshop</label>
     <br>
     <input type="radio" name="workshop" value="drones"> Drones <br>
     <input type="radio" name="workshop" value="Rasberry Pi"> Rasberry Pi <br>
     <input type="radio" name="workshop" value="Security"> Security
     <br><br>
     <input type="checkbox" name="akkord" value="Akkord">Ik ga akkord met de voorwaarden
     <br><br>
     <input type="submit" name="inschrijven" value="Inschrijven">
 </form>
 </div>
 </body>
</html>


<?php
