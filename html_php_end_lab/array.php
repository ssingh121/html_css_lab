<!DOCTYPE html>
<html>
  <head>
    <title>Using PHP in HTML</title>
  </head>
  <body>
    <h1>Colors:</h1>
    <?php
$colors = array('red', 'green', 'blue');
$length = count($colors);

for ($i = 0; $i < $length; $i++) {
    echo $colors[$i] . "\n";
}
?>
  </body>
</html>
