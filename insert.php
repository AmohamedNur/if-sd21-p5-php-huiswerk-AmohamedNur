
<?php
session_start();
if(isset($_POST['toevoegen'])) {
    $_SESSION['merk']=$_POST['merk'];
    $merk=$_SESSION['merk'];
    $_SESSION['type']=$_POST['type'];
    $type=$_SESSION['type'];
    $_SESSION['prijs']=$_POST['prijs'];
    $prijs=$_SESSION['prijs'];
    $conn = new mysqli('localhost', 'root', '', 'fietsenmaker');
    $stmt = $conn->prepare("insert into fietsenmaker (merk,type,prijs) values (?,?,?)");
    $stmt->bind_param("ssi", $merk, $type, $prijs);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('Location: masterpagina.php');
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
        <label for="formGroupExampleInput" class="form-label">Merk</label>
        <input type="text" name="merk" class="form-control" id="formGroupExampleInput" value="">
    </div>
    <br>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Type</label>
        <input type="text" name="type" class="form-control" id="formGroupExampleInput2" value="">
    </div>
    <br>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Prijs</label>
        <input type="text" name="prijs" class="form-control" id="formGroupExampleInput2" value="">
    </div>
    <br>
    <input type="submit" name="toevoegen" value="toevoegen">
</form>
</body>
</html>


