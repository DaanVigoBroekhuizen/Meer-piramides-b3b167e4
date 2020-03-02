<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>

<?php
    
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<td height=40px width=40px bgcolor=#000></td>";
    }
    echo (PHP_EOL);
    echo "</tr>";
}
        

    
?>
</table>
</body>
</html>