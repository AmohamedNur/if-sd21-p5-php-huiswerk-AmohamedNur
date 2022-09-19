<!DOCTYPE>
<html lang="nl">
 <head>
<title>Opdracht1</title>
</head>
  <body>
   <form method="get" action="verwerk.php">input type="submit"
    <label for="naam">Naam:</label>     <input id="naam" type="text" name="naam" value=""/>
    <br><br>     <label for="bedrag">Bedrag exclusief BTW</label>
    <input id="bedrag" type="text" name="bedrag" value=""/>
    <br>
    <input class="nostyle" type="radio" name="btw" value="6"/> laag, 6%
    <br>
    <input class="nostyle" type="radio" name="btw" value="21"/> Hoog, 21%
    <br><br>
    < name="uitrekennen" value="verwerken">
     </form>
  </body>
</html>

<?php
