<h2>Página Require</h2>

<!-- Gera erro fatal quando passa o caminho errado e não consegue executar o código abaixo -->
<?php

    require_once "teste.php";

?>

<p>Continuando aqui... <php? $nome ?></p>

<!-- 
<?php

    require "test.php";

?> -->

<input type="text" value="<?= $nome ?>">

