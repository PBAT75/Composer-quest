<?php

require "../vendor/autoload.php";
 use App\wcs\Hello2;
 use HelloWorld\SayHello;


$hello1 = new Hello2();
$autre= new SayHello();

echo $hello1 -> talk();
echo $autre -> world ();


