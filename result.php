<?php 
$censored = $_GET["censored_word"];
$paragraph = $_GET["base-parag"];

// risultati form 
// var_dump($censored);
// var_dump($paragraph);

// lunghezza paragrafo
$p_length= strlen($paragraph);
// var_dump($p_length);

// censura al paragrafo 
$censored_paragraph = str_replace($censored, '***', $paragraph);
// var_dump($censored_paragraph);

// lunghezza paragrafo censurato 
$cp_length= strlen($censored_paragraph);
// var_dump($cp_length);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- bootstrap  -->
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>

<div class="container mt-5">
<h3>
   <b>Parola da censurare:</b> <?= $censored?>
</h3>
<div class="card my-3">
    <h4 class="card-header">Paragrafo originale</h4>
    <div class="card-body">
        <p>
           <b>Contenuto:</b> <?= $paragraph?> 
        </p>
        <p>
           <b>Lunghezza:</b> <?= $p_length?> 
        </p>
    </div>
</div>
<div class="card">
    <h4 class="card-header">Paragrafo censurato</h4>
    <div class="card-body">
        <p>
           <b>Contenuto censurato:</b> <?= $censored_paragraph?> 
        </p>
        <p>
           <b>Lunghezza con censura:</b> <?= $cp_length?> 
        </p>
    </div>
</div>
</div>
    
</body>
</html>