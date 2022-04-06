<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
<?php
    $text = "Software Engineering";
    echo "String : ". $text."<br>";

    $totals = array_count_values(str_split($text));
    arsort($totals);

    echo "Largest Character : ";
    echo array_values($totals)[0]."<br>";

    echo "For the Character : ";
    echo array_keys($totals)[0];
?>
</body>
</html>
