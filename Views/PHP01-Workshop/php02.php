<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
<?php
echo "string :";echo ' ';echo "Software Engineering"."<br>";
echo "Expected Value :";echo ' ';echo strtr("Software Engineering","(AEIOUaeiou","xxxxxxxxxx");
?>
</body>
</html>