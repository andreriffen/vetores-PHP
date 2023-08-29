<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertedor</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    
    <style> 
        *{
            margin: 10px;
            padding: 0;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-size: 1.2em;
            background-color: #222;
            color: #fff;
        }
        .grid{
            display: grid;
            justify-items: center;
        }
        
        .linha:nth-child(even){
            background-color: #464;
        }

        .alto{
            height: 25px;
            width: 500px;
        }
        
        .trtitulo{
            background-color: #262;
            height: 50px;
        }
        .io{
            background-color: #080;
        }
        select, input, button, td, th, fieldset, div, form{
            border-radius: 5px;
        }
        table{
            text-align: center;
            min-width: 300px;
        }
        fieldset{
            padding:10px;
        }

        input{
            padding-left: 5px;
            border: #080;
        }
        button{
            width: 100px;
            height: 30px;
            color: #080;
            font-weight: 700;
            background-color: #222;
            transition: background-color 0.5s;
        }
        button:hover{
            background-color: #444;
        }
    </style>
    <div class="grid">
        <h1>Conversor de moedas </h1>
        <h2>(valores fixos)</h2>
            <form method="post" class="io">
                <fieldset>
                    <legend> Entrada de dados HTML</legend>
                <label for="valor">Valor em Reais (R$): </label><br>
                <input type="number" class="alto" name="real" step="0.01" required placeholder="Ex.: 500 "><br>
                <label for="alvo">Converter para: </label> <br>
                <select name="alvo" class="alto" required>
                    <option value="" selected disabled></option>
                    <option value="usd">Dollar (USD)</option>            
                    <option value="eur">Euro (EUR)</option>            
                    <option value="jpy">Yen (JPY)</option>            
                    <option value="inr">Rupia (INR)</option>            
                </select><br>
                <button type="submit">Converter</button>
                </fieldset>
                <br>
            </form>
            
        <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST")  //loop verificando se algo foi postado no botão de submit
                {
                    $real = $_POST['real'];
                    $moedaAlvo = $_POST['alvo'];
                    
                    $taxasConversao = 
                    [   "usd" => 0.20,  // R$ 1 -> U$ 0.20 Dólar   US
                        "eur" => 0.15,  // R$ 1 -> € 0.15  Euro    EU
                        "jpy" => 29.66, // R$ 1 -> ¥ 29.66 Yen     JP
                        "inr" => 16.87  // R$ 1 -> ₹ 16.87 Rupia   IN
                    ];

                    $listaSimbolos = 
                    [   "usd" => "U$ \u{1F4B5}",  //US Dolar
                        "eur" => "€ \u{1F4B6}",   //EU Euro
                        "jpy" => "¥ \u{1F4B4}",   //JP Yen
                        "inr" => "₹ \u{1F4B7}"    //IN Rupia
                    ];

                    if(isset($taxasConversao[$moedaAlvo])) 
                    {
                        $resultado =    $real * $taxasConversao[$moedaAlvo];
                        $simbolo =      $listaSimbolos[$moedaAlvo];
                        $resultadoConvertido = number_format($resultado, 2, '.', '');
                        
                        //cabeçalho tabela
                        echo"<br><form><fieldset> Saída de dados PHP<table>
                        <caption>Valor em Real: R$ $real,00</caption>
                                    <thead>
                                        <tr class='trtitulo'>
                                            <th colspan='2'>Valor </th>
                                            <th> Taxa</th>
                                        </tr>
                                    </thead>";
                        
                        //corpo da tabela
                        echo "  <tbody>
                                    <tr class='linha'>
                                        <td><strong>$simbolo</strong></td>
                                        <td><strong>$resultadoConvertido</strong></td>
                                        <td><strong>{$taxasConversao[$moedaAlvo]}</strong></td>
                                    </tr>";
                                
                                foreach ($taxasConversao as $moeda => $taxa) {
                                    if ($moeda !== $moedaAlvo) {
                                        $valorConvertido = $real * $taxa;
                                        $valorFormatado = number_format($valorConvertido,2,'.',',');
                                        $simboloMoeda = $listaSimbolos[$moeda];

                                        echo "<tr class='linha'>
                                                <td>$simboloMoeda</td>
                                                <td>$valorFormatado</td>
                                                <td>$taxa</td>
                                              </tr>";
                                    }
                                }
                                
                                
                                echo "</tbody></table></fieldset><form>";
                    } else { echo "Moeda alvo inválida"; }

                }

            ?>
        <p>Fonte:<strong><a href="https://www.bcb.gov.br/conversao">Conversor de moedas Banco Central</a></strong></p>
    </div>
    
</body>
</html>
