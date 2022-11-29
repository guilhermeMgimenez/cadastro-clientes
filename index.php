<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de clientes</title>
</head>
<body>
    <h1>cadastro de clientes</h1>
    <?php
    $nome = "guilherme"; 
    $idade = 18; 
    $fumante = false; 
    echo "<p>Id cliente: $nome <br>"; 
    echo "Idade cliente: $idade <br>"; 
    echo "fumante: $fumante";
    echo "<br>";
    if($idade >= 18 ){
        echo "<p>Sua idade é $idade</p>";
        echo "<p>Pode entrar na festa</p>";
    }
    $cor = "vermelho";
    switch ($cor) {
        case 'azul':
            echo "<p>Sua cor favorita é <b>AZUL</b></p>";
            break;

        case 'verde':
            echo "<p>Sua cor favorita é <b>VERDE</b></p>";
            break;

        case 'vermelho':
            echo "<p>Sua cor favorita é <b>VERMELHO</b></p>";
            break;

        default:
            echo "<p>Sua cor favorita não é verde, nem azul e nem vermelho</p>";
            break;
    }

    $dia = 3;
    switch($dia){
        case 1:
            echo "domingo";
            break;
        case 2:
            echo "segunda";
            break; 
        case 1:
            echo "domingo";
            break;
        case 3:
            echo "segunda";
            break;
        case 4:
            echo "terça";
            break;
        case 5:
            echo "quarta";
            break;
        case 6:
            echo "quinta";
            break;
        case 7:
            echo "sexta";
            break; 
            default:
            echo "dia invalido"
            break;
    }   
     ?>
   
</body>
</html>