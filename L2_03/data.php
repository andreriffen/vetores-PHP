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
      <p> Lista L2 - Exercício 3. </p>
 
<?php

$alunos = array();

for($i = 1; $i <= 3; $i++){
  $nome = $_POST["nome$i"];
  $nota = $_POST["nota$i"];

  //armazena nota no vetor associativo em cada loop
  $alunos[$nome] = $nota;

}

//ordena vetor de notas em ordem descrescente
arsort($alunos);

//exibe vetor em formato tabular
echo "<table>
            <tr>
                <th>Nome do Aluno</th>
                <th>Nota</th>
            </tr>";

    foreach ($alunos as $nome => $nota) {
        echo "<tr>
                <td>$nome</td>
                <td>$nota</td>
            </tr>";
    }

    echo "</table>";

?>

</div>

</section>



</div>
</body>
</html>