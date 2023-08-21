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
  $idade = $_POST["idade"];
  $desconto = 0;
  $dIdade = 0;
  $fidelidade = 0;


//idade menor que 55: nenhum desconto. Idade entre 55 e 70: 5% desconto. Idade acima 70: 7% desconto.
if($idade > 55 && $idade <= 70){
  $desconto = $valorCompra * 5/100;
}
elseif($idade > 70){
  $desconto = $valorCompra * 7/100;
}
else{
  $desconto = 0;
}

//desconto por cartão fidelidade
if(isset($_POST['fidelidade'])){
  $fidelidade = $valorCompra * 5/100;
}else{
  $fidelidade = 0;
}

$valorFinal = $valorCompra - $fidelidade - $desconto;

  echo "<p> Valor da compra: <strong>$valorCompra</strong> .<br>
  Idade do cliente: <strong> $idade </strong> .<br>
  Valor Final: <strong>$valorFinal</strong></p>";
?>

</div>

</section>



</div>
</body>
</html>