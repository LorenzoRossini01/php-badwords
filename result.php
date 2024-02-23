<?php 
$censored = $_GET["censored_word"];
$paragraph = $_GET["base-parag"];

// risultati form 
var_dump($censored);
var_dump($paragraph);

// lunghezza paragrafo
$p_length= strlen($paragraph);
var_dump($p_length);

// censura al paragrafo 
$censored_paragraph = str_replace($censored, '***', $paragraph);
var_dump($censored_paragraph);

// lunghezza paragrafo censurato 
$cp_length= strlen($censored_paragraph);
var_dump($cp_length);

?>