<!DOCTYPE>
<html lang="nl">
  <head>
      <title>Opdracht1</title>
  </head>
  <body>
    <?php
    $hour = date('H');
    echo "$hour";
if( $hour >=6 && $hour <12) {
    echo "Het is Octhend";
}
else if($hour >= 12 && $hour < 18) {
    echo "Het is Middag";
}
else if($hour >= 18 && $hour < 24) {
    echo "Het is Avond";
}
else {
    echo "ERROR!";}

    ?>
  </body>
</html>




<?php
