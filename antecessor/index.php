<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    
    <form method="post">
        <fieldset>
            <legend> Mostra antecessor e sucessor</legend>
        <label for="num-id">Digite um numero</label>
        <input type="number" id="num-id" name="num-name">
        <button type="submit">Enviar</button>
        </fieldset>
    </form>

    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $num = $_POST['num-name'] ?? "";
            $numS = $num + 1;
            $numA = $num - 1;
            echo "<p>Antecessor: $numA</p>";
            echo "<p>Numero: $num</p>";
            echo "<p>Sucessor: $numS</p>";
        }

    ?>
</body>
</html>
