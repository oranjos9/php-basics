<?php
//functions
$number = 100;
$root = sqrt($number);
echo $root;
echo "<br>";
echo sqrt(1000);
echo "<br>";

echo pow(5,2);
echo "<br>";
echo max(34,69,50,11,1,40,50);
echo "<br>";
echo min(34,69,50,11,1,40,50);
echo "<br>";
$x=63.6578446;
echo round($x);
echo "<br>";
echo round($x, 3);
echo "<br>";
echo floor($x);
echo "<br>";
echo ceil($x);
echo "<br>";
$sentence="You dont mean what you are saying";
echo strtoupper($sentence);  //converts into uppercase
echo "<br>";
echo strtolower($sentence);
echo "<br>";
echo ucwords($sentence);
echo "<br>";
echo str_word_count($sentence);
echo "<br>";
echo strlen($sentence); //number of letters
echo "<br>";
$password ="p@55w0rd";
echo md5($password);//how to encrypt a password
echo "<br>";
echo sha1($password);//weak encryption
echo "<br>";
echo crypt($password,"reuuowejowewoioerrr");//better way on encrypting
echo "<br>";
