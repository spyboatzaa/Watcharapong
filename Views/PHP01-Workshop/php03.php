<!DOCTYPE html>
<html>
<body>

<?php
$color=array("red", "green", "yellow", "blue", "pink", "black", "white"); 
echo "MyArray Value : " . $color[0] . " " . $color[1] . " " . $color[2] . " " . $color[3] . " " . $color[4] . " " . $color[5] . " " . $color[6] ;
echo "<br>";
echo "Expected Value :";
$reverse = array_reverse($color);
foreach ($reverse as $value){
    echo "$value ";
}
?>

</body>
</html>

