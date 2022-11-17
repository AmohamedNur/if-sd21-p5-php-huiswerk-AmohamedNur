<?php
session_start();
try{
    $db=new PDO("mysql:host=localhost;dbname=fietsenmaker",
        "root","");
    if(isset($_POST['toevoegen'])){
        $merk=filter_input(INPUT_POST,'merk',FILTER_SANITIZE_STRING);
        $type=filter_input(INPUT_POST,'type',FILTER_SANITIZE_STRING);
        $prijs=filter_input(INPUT_POST,'prijs',FILTER_SANITIZE_NUMBER_FLOAT);
        $query =$db->prepare("UPDATE fietsenmaker SET merk =:merk, type=:type ,prijs=:prijs WHERE id=:id");
        $query->bindParam("merk",$merk);
        $query->bindParam("type",$type);
        $query->bindParam("prijs",$prijs);
        $query->bindParam("id",$_GET['id']);
        header('location: masterpagina.php');
        if($query ->execute()){
            echo "Done";
        }else{
            echo"Error again.";
        } echo"<br>";
    } else {
        $query =$db->prepare("SELECT * FROM fietsenmaker WHERE id= :id");
        $query ->bindParam("id" ,$_GET['id']);
        $query->execute();
        $result =$query ->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data ){
            $merk =$data ['merk'];
            $type=$data ['type'];
            $prijs =$data ['prijs'];
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
     <label for="formGroupExampleInput" class="form-label">Merk</label>
     <input type="text" name="merk" class="form-control" id="formGroupExampleInput" value="<?php echo $merk ;?>">
 </div>
     <br>
 <div class="mb-3">
     <label for="formGroupExampleInput2" class="form-label">Type</label>
     <input type="text" name="type" class="form-control" id="formGroupExampleInput2" value="<?php echo $type ;?>">
 </div>
 <br>
 <div class="mb-3">
     <label for="formGroupExampleInput2" class="form-label">Prijs</label>
     <input type="text" name="prijs" class="form-control" id="formGroupExampleInput2" value="<?php echo $prijs ;?>">
 </div>
     <br>
     <input type="submit" name="toevoegen" value="toevoegen">
 </form>
 </body>
</html>
