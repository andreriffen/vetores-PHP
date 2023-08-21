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
      <p> Lista L1 - Exercício 8. </p>
 
      <?php
  $valorCompra = $_POST["valor-compra"];
  $desconto  = 0;
  $acrescimo = 0;

  if(!isset($_POST['forma-pagamento']))
   {
   die("<p> A forma de pagamento é informação obrigatória! </p>");
   }

  $formaPagamento = $_POST["forma-pagamento"];

  if($formaPagamento == "À vista")
   {
   $desconto = $valorCompra * 5/100;
   }
  else
   {
   $acrescimo = $valorCompra * 2/100;
   }

  
  if(isset($_POST['pagamento-cartao']))
   {
   $sorteio = "<b>Pagamento com </b><strong>VISA</strong> <p><span>Poderá participar do sorteio mensal de um automóvel! </span>";
   }
  else
   {
   $sorteio = "Pagamento cartão convencional. <br><b>Cliente não elegível para sorteio.</b>";
   }
 
  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  echo "<p> Resultado da compra<br>
        Valor inicial da compra:<b> R$$valorCompra </b><br>
        Desconto:<b> R$$desconto </b> <br>
        Acrescimo:<b> R$$acrescimo </b> <br>
        Valor final da compra:<b> R$$valorFinalCompra </b><br>
        $sorteio </p>";
 ?>

</div>

</section>



</div>
</body>
</html>