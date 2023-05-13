<?php
$n=5;
$count="(first)";
for ($x = $n; $x > 0; $x--) {
    if($x%2==0)
        $count="(second)";
    else
        $count="(first)";
    echo "Counting down $count from $x <br>";
}
?>