<?php

$cara = rand(1,6);

if ($cara == 1){
    echo "<img src='images/lado1.svg'>";
}elseif ($cara == 2){
    echo "<img src='images/lado2.svg'>";
}elseif ($cara == 3){
    echo "<img src='images/lado3.svg'>";
}elseif ($cara == 4){
    echo "<img src='images/lado4.svg'>";
}elseif ($cara == 5){
    echo "<img src='images/lado5.svg'>";
}else{
    echo "<img src='images/lado6.svg'>";
}

?>