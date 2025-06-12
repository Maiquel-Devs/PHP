<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Comando em PHP</title>
</head>
<body>
    <h1>
        <?php 
            
            $Nome = 'João';     // Variável pode mudar (alterar o valor)
            $Sobrenome = 'Paulo';
            const PAIS = 'Brasil'; // Constante não pode alterar o valor (fica fixo)

            echo "Muito Prazer, $Nome $Sobrenome! Voçê mora no " . PAIS;    // "." é concatenação



            // Sempre Busque usar aspas dupla "" para não dar erro.
           
        ?>
    </h1>
</body>
</html>