<?php


class HelloWorldClass 
{

$font_color = 'RED';
$font_size = 20;
$hello_string = "Hello World";
function custom_show()
{
	echo "$font_color . $font_size . $hello_string";
}

class sub_HelloWorldClass 
{
$font_color ='red';
$font_size = 40;
$hello_string = "Hello World!";
echo "<font size=$font_size color=$font_color>$hello_string</font>";
$font_color ="green";
$font_size = 20;
echo "<font size=$font_size color=$font_color>$hello_string</font>";
}
}


?>
