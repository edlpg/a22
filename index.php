<?php
require 'logic.php';
 ?>

<!DOCTYPE html>
<html>
 <head>
  <title>A2</title>
   <link rel="stylesheet" href="styles.css">
 </head>
  <body>
  <h1>Bill Splitter</h1>

  <form method='GET' action='index.php'>

   <label>Split how many ways?
       <input type='number' min='1' name='manyWays' required>
   </label>
   <p>Requiered*</p><br><br>

   <label> How much was the tab?
       <input type='number' min='0' name='tab' required>
   </label>
   <p>Requiered*</p><br><br>

   <label>How was the service?
     <select name="howWasService">
        <option value="good">good</option>
        <option value="ok">ok</option>
        <option value="bad">bad</option>
</select>
   </label><br><br>

   <label>Round up?
     <input type="radio" name="round" checked value="yes"> Yes
     <input type="radio" name="round" value ="no"> No
   </label><br>

   <input type='submit' value='Calculate' id="sub"><br><br>

   <?php if($_GET): ?>
 <div id="result" style="background-color:<?php echo $background?>">
    <?php echo $total;?>
 </div>
 <?php endif; ?>
</form>

  </body>
</html>
