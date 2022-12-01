<?php
$db=new PDO("mysql:host=localhost;dbname=cijfersysteem",
    "root","");
$query=$db->prepare("SELECT * FROM cijfer");
$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);

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
  background-color:#63c4bc;
}
</style>";

echo "<table>";
echo "<tr>";
echo "<td>leerlingen</td>";
echo "<td>vak</td>";
echo "<td>cijfer</td>";
echo "</tr>";
foreach ($result as $data) {
    echo "<tr>";
    echo "<td>" .$data['id']."</td>";
    echo "<td>" . $data['leerling'] . "</td>";
    echo "<td>" . $data['vak'] . "</td>";
    echo "<td>" . $data['cijfer'] . "</td>";
    echo "<td> <a href='update2.php?id=". $data['id'] . "'>update</a></td>";
    echo "<td> <a href='delete2.php?id=". $data['id'] . "'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='insert.php'>insert</a>";
