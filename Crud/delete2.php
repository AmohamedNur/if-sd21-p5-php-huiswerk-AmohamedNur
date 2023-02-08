<?php
$db=new PDO("mysql:host=localhost;dbname=cijfersysteem",
    "root","");
$query=$db->prepare("DELETE FROM cijfer WHERE id=" .$_GET['id']);
if($query->execute()){
    header('Location: detail.php');
} else{
    echo "error";
}
?>
