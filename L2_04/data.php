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
      <p> Lista L2 - Exercício 4. </p>
 
<?php
$produtos_precos = array(
    'Monitor' => 500,
    'Teclado' => 100,
    'Mouse' => 50
);

$total = 0;

if (isset($_POST['produtos'])) {
    
  echo "<h2>Itens Comprados:</h2><ul>";
  
  foreach ($_POST['produtos'] as $produto) {
  
    if (isset($produtos_precos[$produto]))
    { echo "<li>$produto - R$ {$produtos_precos[$produto]}</li></ul>";
    
    $total += $produtos_precos[$produto];}
  }

    if ($total > 0) { echo "<p>Total da Compra: <strong>R$ $total</strong>.</p>"; } 

    } //isset, nada marcado na checkbox
    else { echo "<p>Nenhum item foi selecionado.</p>"; }
?>

</div>
</section>
</div>
</body>
</html>