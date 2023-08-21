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
      <p> Lista L1 - Exercício 2. </p>
 
 
      <?php
  $distancia     = $_POST["distancia"];
  $consumo       = $_POST["consumo"];
  $precoPorLitro = $_POST['preco'];

  //calculando quantos litros serão gastos na viagem
  $quantosLitros = $distancia / $consumo;

  //calculando quantos reais a Maria gastou na viagem
  $quantosReais = $quantosLitros * $precoPorLitro;  


  //formatando variáveis numéricas. Faça isso logo antes do comando echo
  $precoPorLitro = number_format($precoPorLitro, 2, ",", ".");
  $quantosReais  = number_format($quantosReais, 2, ",", ".");
  $quantosLitrosFormatado = number_format($quantosLitros, 0, ",", ".");

  echo "<p> Processando os dados da viagem da Maria: <br>
        Gasto em reais com a viagem:<span><strong> R$$quantosReais </span></strong> <br>
        Gasto em litros de combustível:<span><strong> $quantosLitrosFormatado litros</strong>.</span><br>
        Preço por litro de combustível:<span><strong> R$$precoPorLitro </strong></span>.</p>";
 ?>

</div>

</section>



</div>
</body>
</html>