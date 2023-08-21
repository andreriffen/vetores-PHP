<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="demo-page">
    <section>
      <div class="href-target" id="input-types"></div>
      <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10" /><line x1="21" y1="6" x2="3" y2="6" /><line x1="21" y1="14" x2="3" y2="14" /> <line x1="21" y1="18" x2="3" y2="18" /></svg>
          Fundamentos do PHP </h1>
      <p> Lista L1 - Exercício 4. </p>
 

<?php
define('MULTIPLICADOR', 5/9);
$tempF  = $_POST['tempF'];

$tempC  = ($tempF - 32) * MULTIPLICADOR;

$tempFFormatado = number_format($tempF, 1, ",", ".");
$tempCFormatado = number_format($tempC, 1, ",", "."); 

echo "<p> Resultado da conversão de escalas termométricas: <br>
      Valor da temperatura em Fahrenheit:<strong><span> {$tempFFormatado}ºF </span></strong><br>
      Valor da temperatura em Celsius:<strong><span> {$tempCFormatado}ºC </span></strong></p>";
?>

</div>

</section>



</div>
</body>
</html>