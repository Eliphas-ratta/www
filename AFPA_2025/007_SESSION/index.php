<?php

session_start(); //démarre ou recupere si elle existe


$_SESSION["name"]= "HABBANI"; // alimenter
$_SESSION["first_name"]= "Samih";


echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

unset($_SESSION["name"]); // ça enleve que le nom dans la session 
session_unset(); // la vider

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>