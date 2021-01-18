  
<?php
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monster</title>
</head>
<body>

<?php

  define("monsterCount", 10);
  
  for ($i=0; $i < monsterCount ; $i++) { 

  drawMonster(rand(1,4), rand(100,400));
}

?>

</body>
</html>