<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <h1>Question 3</h1>
<?php
    function calculateArea($width,$height)
    {
        $area=$width*$height;
        echo "<strong>The area of a rectangle with a width of $width and $height for height is $area. </strong>";
    }
    calculateArea(4,2);
?>
</body>
</html>