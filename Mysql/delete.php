<?php
$db=new PDO("mysql:host=localhost;dbname=fietsenmaker",
    "root","");
$query=$db->prepare("DELETE FROM fietsenmaker WHERE id=" .$_GET['id']);
if($query->execute()){
    header('Location: masterpagina.php');
} else{
    echo "error";
}
?>