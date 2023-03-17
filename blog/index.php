<?php
include_once('templates/header.php');
?>

<main>
    <div id="title-container">
        <h1>Blog do Diego Costa</h1>
        <p>O seu blog de programação sobre PHP</p>
    </div>
    <div id="posts-container">
        <?php foreach ($posts as $post) : ?>
            <div class="post-box">
                <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                </a>
                <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                    <h2 class="post-title">
                        <?= $post['title'] ?>
                    </h2>
                </a>
                <p class="post-description">
                    <?= $post['description'] ?>
                </p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                        <a href="<?= $BASE_URL ?>">
                            <?= $tag ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
include_once('templates/footer.php');
?>