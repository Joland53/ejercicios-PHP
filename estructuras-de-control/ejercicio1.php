<?php

$moneda = rand(0,1);

if ($moneda == 0){
    echo "<img src='images/cara.png'>";
} else {
    echo "<img src='images/cruz.png'>";
}

?>