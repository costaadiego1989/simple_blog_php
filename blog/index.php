<?php
    include_once('templates/header.php');
?>
<main>
    <div id="title-container">
        <h1>Blog do Diego Costa</h1>
        <p>O seu blog de programação sobre PHP</p>
    </div>
    <div id="posts-container">
        <? foreach ($posts as $post): ?>
            <p><?= $post['title'] ?></p>
        <? endforeach; ?>
    </div>
</main>
<?php
    include_once('templates/footer.php');
?>