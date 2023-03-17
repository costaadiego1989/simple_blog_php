<?php

// if (isset($_GET['nome']) && isset($_GET['email'])){
//     echo $_GET['nome'];
//     echo '<br>';
//     echo $_GET['email'];
// } else {
//     echo 'Não há dados para serem exibidos. Retorne a página anterior e preencha o formulário.';
// }

if (isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['km']) && isset($_POST['preco'])) {
    echo $_POST['marca'];
    echo '<br>';
    echo $_POST['modelo'];
    echo '<br>';
    echo $_POST['km'];
    echo '<br>';
    echo $_POST['preco'];
    echo '<br>';
    print_r($_POST['acessorios']);
    echo '<br>';
} else {
    echo 'Um ou mais campos precisam ser preenchidos. Retorne a página an';
}

?>

<input type="text" value="<?= $_POST['marca'] ?>"></br>
<input type="text" value="<?= $_POST['modelo'] ?>"></br>
<input type="text" value="<?= $_POST['km'] ?>"></br>
<input type="text" value="<?= $_POST['preco'] ?>"></br>

