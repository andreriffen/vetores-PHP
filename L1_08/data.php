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
      <p> Lista L1 - Exercício 8. </p>
 
 
<?php
  $valorCompra = $_POST["valor-compra"];
  $desconto  = 0;
  $acrescimo = 0;

  //testando se um checkbox foi marcado - forma de pagamento
  if(isset($_POST['forma-pagamento']))
   {
   $desconto = $valorCompra * 5/100;
   }

  //testando se o checkbox foi marcado - entrega a domicílio
  if(isset($_POST['entrega-domicilio']))
   {
   $acrescimo = $valorCompra * 2/100;
   }
  
  //calculando o valor final da compra
  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  echo "<p> Resultado da compra: <br>
        Valor inicial da compra = <span> R$$valorCompra </span> <br>
        Desconto = <span> R$$desconto </span> <br>
        Acrescimo = <span> R$$acrescimo </span> <br>
        Valor final da compra = <span> R$$valorFinalCompra </span> </p>";
?>

</div>

</section>



</div>
</body>
</html>