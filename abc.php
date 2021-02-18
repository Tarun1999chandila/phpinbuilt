<?php
$name="Tarun";
$age=21;
echo $name."chandila";
echo "<br>";
$c=getimagesize("abc.png");
echo $c;
ECHO "<BR>";
function result( $length ) { 
    $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz"; 
    return substr(str_shuffle($chars),0,$length); } 
    echo result(7);
    ECHO "<BR>";
    $first_date = new DateTime('2010-07-19T10:56:37+00:00'); 
    $second_date = new DateTime('2018-09-12T23:10:15+05:30'); 
    $interval = $first_date->diff($second_date);
?>

