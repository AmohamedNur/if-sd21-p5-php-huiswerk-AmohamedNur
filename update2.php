<?php
session_start();
try{
    $db=new PDO("mysql:host=localhost;dbname=cijfersysteem",
        "root","");
    if(isset($_POST['toevoegen'])){
        $vak=filter_input(INPUT_POST,'vak',FILTER_SANITIZE_STRING);
        $cijfer=filter_input(INPUT_POST,'cijfer',FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        if ($cijfer <= 1 || $cijfer >= 10){
            echo "vul correct cijfer";
        }

        $query =$db->prepare("UPDATE cijfer SET  vak=:vak ,cijfer=:cijfer WHERE id=:id");
        //$query->bindParam("leerling",$leerling);
        $query->bindParam("vak",$vak);
        $query->bindParam("cijfer",$cijfer);
        $query->bindParam("id",$_GET['id']);

        if($query->execute()){
            echo "Done";
            header('location: detail.php');
        } else{
            echo"Error again.";
        } echo"<br>";
    } else {
        $query = $db->prepare("SELECT * FROM cijfer WHERE id= :id");
        $query->bindParam("id" ,$_GET['id']);
        $query->execute();
        $result = $query ->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data ){
            $leerling=$data ['leerling'];
            $vak=$data ['vak'];
            $cijfer=$data ['cijfer'];
        }
    }
} catch(PDOException $e) {
    die ('ERROR:' .$e->getMessage());
}
?>

    <!DOCTYPE>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    <form method="post">
        <h3>Niuewe Merken Toevoegen</h3>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">leerling</label>
            <input type="text" name="vak" class="form-control" id="formGroupExampleInput" value="<?php echo $leerling ;?>">
        </div>
        <br>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Vak</label>
            <input type="text" name="vak" class="form-control" id="formGroupExampleInput2" value="<?php echo $vak ;?>">
        </div>
        <br>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">cijfer</label>
            <input type="text" name="cijfer" class="form-control" id="formGroupExampleInput2" value="<?php echo $cijfer ;?>">
        </div>
        <br>
        <input type="submit" name="toevoegen" value="toevoegen">
    </form>
    </body>
    </html>

<?php
