<?php
$db=new PDO("mysql:host=localhost;dbname=fietsenmaker",
         "root","");
$query=$db->prepare("SELECT * FROM fietsenmaker");
$query->execute();
$fietsen=$query->fetchAll(PDO::FETCH_ASSOC);

echo "<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>";

echo "<table>";
echo "<tr>";
echo "<td>Merk</td>";
echo "<td>Type</td>";
echo "<td>prijs</td>";
echo "</tr>";
foreach ($fietsen as $fiet) {
    echo "<tr>";
    echo "<td>" .$fiet['id']."</td>";
    echo "<td>" . $fiet['merk'] . "</td>";
    echo "<td>" . $fiet['type'] . "</td>";
    echo "<td>" . $fiet['prijs'] . "</td>";
    echo "<td> <a href='detail.php?id=". $fiet['id'] . "'>details</a></td>";
    echo "<td> <a href='update.php?id=". $fiet['id'] . "'>update</a></td>";
    echo "<td> <a href='delete.php?id=". $fiet['id'] . "'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='../Crud/insert.php'>insert</a>";