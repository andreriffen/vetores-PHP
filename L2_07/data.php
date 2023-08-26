<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="style.css"> 
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head> 
<body>
  <div class="demo-page">
    <section>
      <div class="href-target" id="input-types"></div>
      <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10" /><line x1="21" y1="6" x2="3" y2="6" /><line x1="21" y1="14" x2="3" y2="14" /> <line x1="21" y1="18" x2="3" y2="18" /></svg>
          Vetores em PHP </h1>
      <p> Lista L2 - Exercício 6. </p>
 
<?php
  $pessoa1 = $_POST['nome1'];
  $pessoa2 = $_POST['nome2'];
  $pessoa3 = $_POST['nome3'];
  $idade1 = $_POST['idade1'];
  $idade2 = $_POST['idade2'];
  $idade3 = $_POST['idade3'];

  $vetor = [$pessoa1 => $idade1,
            $pessoa2 => $idade2,
            $pessoa3 => $idade3 ];
  
// Ordenar o vetor em ordem alfabética crescente pelo nome da pessoa
ksort($vetor);
  
// Cabeçalho da tabela
echo "<table>
<caption> Indice associativo A - Z </caption>
<tr>
 <th> Nome </th>
 <th> Idade </th>
</tr>";

// Conteúdo da tabela
foreach($vetor as $nomePessoa => $idadePessoa){
  echo "<tr>
        <td> $nomePessoa </td>
        <td> $idadePessoa </td>
       </tr>";
};
echo "</table> <br>";

?>

</div>
</section>
</div>
</body>
</html>