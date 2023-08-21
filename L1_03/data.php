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
      <p> Lista L1 - Exercício 3. </p>
 
  <?php
  //criando constantes na linguagem PHP
  define('TAXA_DESCONTO', 10/100);
  define('TAXA_ICMS', 12/100);
  define('COMISSAO_VENDEDOR', 5/100);

  $valorVenda = $_GET['valor-venda'];

  $valorDesconto = $valorVenda * TAXA_DESCONTO;
  $valorICMS     = $valorVenda * TAXA_ICMS;
  $valorComissao = $valorVenda * COMISSAO_VENDEDOR;

  $valorVenda    = number_format($valorVenda, 2, ",", ".");
  $valorICMS     = number_format($valorICMS, 2, ",", ".");
  $valorComissao = number_format($valorComissao, 2, ",", ".");
  $valorDesconto = number_format($valorDesconto, 2, ",", ".");

  echo "<p> 
  <strong>Resultado do processamento de vendas: </strong><br>
  Valor da venda:<span><strong> R$$valorVenda </span>.</strong><br>
  Valor do ICMS:<span><strong> R$$valorICMS </span>.</strong><br>
  Valor da comissão do vendedor:<span><strong> R$$valorComissao </span></strong>.<br>
  Valor do desconto dado ao cliente:<span><strong> R$$valorDesconto </span>.</strong><br>
  Valor da taxa de desconto dado pela loja:<span><strong> ", TAXA_DESCONTO*100, "%</span> .</strong></p>";
  ?>

</div>

</section>



</div>
</body>
</html>