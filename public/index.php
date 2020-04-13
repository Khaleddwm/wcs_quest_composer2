<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
$hello = new Hello();
echo '<h1>' . $hello->talk() . '</h1>';
echo '<h2>' . $hello->comment() . '</h2><br>';

use HelloWorld\SayHello;
$helloMan = new SayHello();
echo '<h1>' . $helloMan->world() . '</h1>';
echo '<h2>' . $hello->comment2() . '</h2><br>';


