<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../style.css">
  
  <link rel="stylesheet" href="visa.css">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="demo-page visa">
    <section>
      <div class="href-target" id="input-types"></div>
      <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10" /><line x1="21" y1="6" x2="3" y2="6" /><line x1="21" y1="14" x2="3" y2="14" /> <line x1="21" y1="18" x2="3" y2="18" /></svg>
          Fundamentos do PHP </h1>
      <p> Lista L2 - Exercício 1. </p>
 
<?php
// Receber as notas dos alunos do formulário
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

// Armazenar as notas em um vetor de índice numérico
$notas = array($nota1, $nota2, $nota3);

// Função para calcular a média das notas
function calcularMedia($notas) {
  $soma = 0;
  $quantidade = count($notas);

  // Somar todas as notas
  for ($i = 0; $i < $quantidade; $i++) {
    $soma += $notas[$i];
  }

  // Calcular a média
  $media = $soma / $quantidade;

  // Retornar a média
  return $media;
}

// Calcular a média das notas usando a função
$mediaNotas = calcularMedia($notas);

$medias = number_format($mediaNotas, 1, '.',',');

// Mostrar a média das notas
echo "<p>A média das notas é: <strong> $medias </strong></p>"  
?>

</div>

</section>



</div>
</body>
</html>