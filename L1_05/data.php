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
      <p> Lista L1 - Exercício 5. </p>
 
 
<?php
  define('TAXA_CAMBIO', 4.87);
  $quantosDolares = $_POST['quantos-dolares'];

  $quantosReais = $quantosDolares * TAXA_CAMBIO;

  $quantosDolares = number_format($quantosDolares, 2, ",", ".");
  $quantosReais   = number_format($quantosReais, 2, ",", "."); 

  echo "<p> Resultado da conversão de moedas: <br>
            Quantia em dólares fornecida:<strong><span> $$quantosDolares </span></strong>.<br>
            Quantia em reais convertida:<strong><span> R$$quantosReais </span></strong>.<br>
            Valor da taxa de câmbio:<strong><span> R$", TAXA_CAMBIO, "</span></strong>.</p>";
?>

</div>

</section>



</div>
</body>
</html>