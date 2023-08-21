<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="demo-page">
    <section>
      <div class="href-target" id="input-types"></div>
      <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10" /><line x1="21" y1="6" x2="3" y2="6" /><line x1="21" y1="14" x2="3" y2="14" /> <line x1="21" y1="18" x2="3" y2="18" /></svg>
          Vetores em PHP </h1>
      <p> Lista L2 - Exercício 5. </p>
 
<?php

// calcular média das idadesss $_POST['idades'] HTML
//
//             VALOR  , VALOR   ,   VALOR
// exemplo:[[   80    ,   82    ,   79    ]]
// indice:    $idades , $idades , $idades
//             ÍNDICE , ÍNDICE  , ÍNDICE
//              

function calcularMedia($idades){
    $soma = 0;
    foreach($idades as $idade){ //3 loops pois há 3 $idades
      $soma += $idade;
    }
    $media = $soma /count($idades);
    return $media;
}

if (isset($_POST['idades'])){
    $idades = $_POST['idades'];

    echo "<h2>Idades Informadas:</h2><ul>";

    foreach($idades as $pessoa => $idade){ //define pessoa 1, pessoa 2 e pessoa 3.
      
        if($idade >= 0 && $idade <= 150){
          echo "<li>Idade da Pessoa $pessoa: $idade anos</li>";
              }else{
                echo"<li>Idades da Pessoa $pessoa: Inválida!🤷‍♂️</li>";
        }

      
    } echo "</ul>";

    $media = calcularMedia($idades);
    $mediaF = round($media,1);
    echo "<p>Média das Idades: $mediaF anos</p>";


}else{
  echo "<p>Nenhuma idade informada.</p>";
}

?>

</div>
</section>
</div>
</body>
</html>