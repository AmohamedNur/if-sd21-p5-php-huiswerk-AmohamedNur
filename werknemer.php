<!DOCTYPE>
<html>
 <head>
     <title></title>
 </head>
 <body>
  <h2>
      <?php
      include_once 'classes/persoon.php';

      $person1 = new Person(n:"piet", a:"20");
      echo $person1->getName() . "is" .$person1->getAge() ."jaar oud.";
      ?>
  </h2>
 </body>
</html>
