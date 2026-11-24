<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 

            //FORMATAÇÃO SIMPLES
            $cotacao = 5.17; //Cotação digitada
            $real = $_REQUEST["din"] ?? 0; //Pega o valor do formulário

            $dolar = $real / $cotacao;

            echo "Seus R\$ " . number_format($real, 2, "," , ".") . "equivalem a US\$ <strong>" . number_format($dolar, 2, "," , ".") . "</strong>";

            //FORMATAÇÃO PROFISSIONAL
            //Biblioteca intl (Internallization PHP), Não funciona no xampp diretamente, antes tem que habilitar a biblioteca, só funciona direto no servidor verdadeiro.

            //$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // echo <p>"Seus ,<strong>" . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>