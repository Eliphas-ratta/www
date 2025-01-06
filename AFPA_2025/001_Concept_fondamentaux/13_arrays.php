<?php

$feeling = array('Sad', 'Happy', 'Angry');
$names = [ ['Sam', 'Paul'], ['Habbani', 'Lena']];
$list = ['text', 12, true];

echo $feeling[2]; //angry
echo $names[0] [0]; //SAM
echo $names[1] [0]; //Habbini

//fonction prédéfinie php
array_push($feeling, 'sick');
echo count($names);

echo '<pre>';
var_dump($feeling);
echo '</pre>';

for ($i=0; $i < count($feeling); $i++) {
    echo $feeling[$i];
}

?>