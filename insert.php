
<?php
session_start();
try {
    $db = new PDO("mysql:host=localhost;dbname=cijfersysteem", "root", "");

if (isset($_POST['toevoegen'])){
    $leerling = filter_input(INPUT_POST, "leerling", FILTER_SANITIZE_STRING);
    $VAK = filter_input(INPUT_POST, "leerling", FILTER_SANITIZE_STRING);
    $leerling = filter_input(INPUT_POST, "leerling", FILTER_SANITIZE_STRING);

    if (empty($_POST ['leerling']) && empty($_POST['vak']) && empty($_POST['cijfer'])) {
        echo "Vul je gegevens in !";
    }
    if (empty($_POST['cijfer'])){
        echo "Vul jou komma getal!";
    }

    else{
       $query = $db->prepare("INSERT INTO cijfer(leerling, vak, cijfer) VALUES(:leerling, :vak, :cijfer)");
       $query->bindParam("leerling", $leerling);
        $query->bindParam("vak", $vak);
        $query->bindParam("cijfer", $cijfer);
        $query->execute();
        header('Location: datail.php');
    }

 }
} catch (PDOException $e) {
    die("error!:" . $e->getMessage());
}
?><!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <h3>Niuewe Merken Toevoegen</h3>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Leerlijn</label>
        <input type="text" name="leerling" class="form-control" id="formGroupExampleInput" value="">
    </div>
    <br>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Vak</label>
        <input type="text" name="vak" class="form-control" id="formGroupExampleInput2" value="">
    </div>
    <br>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">cijfer</label>
        <input type="text" name="cijfer" class="form-control" id="formGroupExampleInput2" value="">
    </div>
    <br>
    <input type="submit" name="toevoegen" value="toevoegen">
</form>
</body>
</html>


