<?php

//ques1
$arr=array("tarun","karan","sahil","shubham");
print_r(reset($arr));

echo "<br>";
//ques2
echo "The time is " . date("h:i:sa");
echo "<br>";
echo "Second is " . date('sa') ."sec";
echo "<br>";
//ques4
$fp = fopen('abc.txt', 'a');  
fwrite($fp, ' Tarun');    
fclose($fp);  
echo "File append";  

echo "<br>";


 //ques5 

list($width, $height, $type, $attr) = getimagesize("dog-puppy-on-garden-royalty-free-image-1586966191.jpg"); 
 
echo "Width of image : " . $width . "<br>"; 
  
echo "Height of image : " . $height . "<br>"; 
  
echo "Image type :" . $type . "<br>"; 
  
echo "Image attribute :" .$attr ;

echo "<br>";



//ques6
$input = "NITIN";
$reverse = strrev($input);
if($input == $reverse) {
echo '<br>'.$input.' is a palindrome';
}
else {
echo '<br>'.$input.' is not a palindrome';
}
echo "<br>";

//ques7
function call_byvalue( $string ) { 
	$string = "TARUN"; 
   echo $string; 
}
$string = "Chandila"; 
call_byvalue($string); 
echo $string; 
echo "<br>";

function call_byref( &$string ) { 
    $string = "TARUN"; 
 echo $string ; 
}
$string = "Chandila"; 
call_byref( $string ); 
echo $string; 
echo "<br>";
//ques18
$arr=array(1,"sahil",2,1,"tarun","tarun"," ");
echo $arrlength=count($arr);
$Count=array();
for($i=0;$i<$arrlength-1;$i++){
	$key=$arr[$i];
	if($Count[$key]>=1){
		
		$Count[$key]++;
	} else{
		$Count[$key]=1;
	}
	}
echo "<pre>";
print_r($Count);
echo "<br>";
//ques9
$name = array("tarun", "karan", "sahil", "abhishek");
sort($name);
foreach ($name as  $val) {
    echo $val . "<br>";
}
echo "<br>";
$name = array("tarun", "karan", "sahil", "abhishek");
rsort($name);
foreach ($name as  $val) {
    echo $val . "<br>";
}
echo "<br>";
$name = array(1=>"tarun",2=> "karan",3=> "sahil",4=> "abhishek");
asort($name);
foreach ($name as $key=> $val) {
    echo $key."=" . $val . "<br>";
}
echo "<br>";
$name = array(1=>"tarun",2=> "karan",3=> "sahil",4=> "abhishek");
ksort($name);
foreach ($name as $key=> $val) {
    echo $key."=" . $val . "<br>";
}
echo "<br>";
$name = array(1=>"tarun",2=> "karan",3=> "sahil",4=> "abhishek");
krsort($name);
foreach ($name as $key=> $val) {
    echo $key."=" . $val . "<br>";
}
echo "<br>";
$name = array(1=>"tarun",2=> "karan",3=> "sahil",4=> "abhishek");
arsort($name);
foreach ($name as $key=> $val) {
    echo $key."=" . $val . "<br>";
}
echo "<br>";
//ques12
$dir    = '/var/www/html';
$files2 = scandir($dir, 1);

print_r($files2);

echo "<br>";

//ques14
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 

echo "<br>";
//ques13
$time= '082307'; 
echo substr(chunk_split($time, 2, ':'), 0, -1)."\n";

echo "<br>";
//ques15
$e_id= 'rayy@example.com';

$t = strstr($e_id, '@', true);
echo $t;

echo "<br>";
//ques17
$str = 'The brown fox';
$addstr ='quick';
$at_pos = 4;
$result = substr_replace($str, $addstr.' ', $at_pos, 0);
echo $result;
//ques16
echo "<br>";
function result( $length ) { 
    $char = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz"; 
    return substr(str_shuffle($char),0,$length); } 
    echo result(7);
    echo "<br>";
    //ques11
$firstdate = new DateTime('2012-11-04T05:04:00+00:00');
$seconddate = new DateTime('2012-11-05T10:44:00+05:30'); 
$diff = date_diff($firstdate,$seconddate);
echo $diff->format('%d')."day".$diff->format('%h')."hours".$diff->format('%i')."Minutes";

?> 


