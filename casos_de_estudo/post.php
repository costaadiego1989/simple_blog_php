<?php

    $validacoes = [];

    if (count($_POST) > 0) {

        if ($_POST['marca'] == '') {
            $validacoes[] = 'Digite o nome da marca do veículo';
        }

        if ($_POST['modelo'] == '') {
            $validacoes[] = 'Digite o nome do modelo do veículo';
        }

        if ($_POST['km'] == '') {
            $validacoes[] = 'Digite a kilometragem do veículo';
        }

        if ($_POST['preco'] == '') {
            $validacoes[] = 'Digite o preço do veículo';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <!-- <form action="cadastro.php" method="post"> -->
        <form action="post.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="modelo" placeholder="Modelo do carro">
        </div>
        <div>
            <input type="text" name="km" placeholder="Kilometros rodados">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="acessorios[]" value="Rodas aro 20"> Rodas aro 20
        </div>
        <div>
            <input type="checkbox" name="acessorios[]" value="Teto solar"> Teto solar
        </div>
        <div>
            <input type="checkbox" name="acessorios[]" value="Bancos de couro"> Bancos de couro
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</body>
</html>