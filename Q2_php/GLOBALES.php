<?php 
$x = 30;
$y = 10; 
function substraction() {
    $GLOBALS['z'] = $GLOBALS['x'] - $GLOBALS['y'];
}
substraction();
echo $z;
?>