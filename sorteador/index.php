<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soteador aleatório</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    
<h1>Sorteio de Número Aleatório</h1>
    
    <?php
        $numeroSorteado = isset($_POST['numero']) ? $_POST['numero'] : rand(0, 100); // Se um número foi enviado pelo formulário, use-o, caso contrário, gere um novo
        echo "<p>O número sorteado é: $numeroSorteado</p>";
    ?>
    
    <form method="post">
        <button type="submit" name="gerar">Gerar outro número</button>
    </form>

</body>
</html>