<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>hello php........ </h1>
 
<?php

//title section
echo "hello from " . "php " . "page";
echo "<br>";
echo "<br>";
echo "<br>";

//get_name section
$x =6;
$y =8;
function get_name(){
    echo $GLOBALS["x"] = $GLOBALS["x"] + $GLOBALS["y"];
     echo "<br>";
}
echo $x . "<br>";
echo $y . "<br>";
get_name();
get_name();
get_name();
get_name();

echo $x . "<br>";

//text section
$x = "hello+php_section";
echo str_word_count($x);

?>
</body>
</html>