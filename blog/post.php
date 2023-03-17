<?php
include_once("templates/header.php");

$urlId = $_GET['id'];
$currentPost;

if (isset($urlId)) {
    foreach ($posts as $post) {
        if ($post['id'] == $urlId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 class="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost['description'] ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores magni dolor hic alias eos assumenda maiores porro nulla praesentium unde possimus, quae optio magnam commodi nobis delectus provident dolorem iste!
            Neque dolorem eius esse maiores minus? Totam accusantium iste molestias, maxime eum asperiores voluptatibus beatae? Eveniet, suscipit, nihil est, natus eius dicta soluta illo dolorum quidem dolore blanditiis. Neque, assumenda.
            Rem, enim nulla praesentium minima debitis totam suscipit accusamus, eaque provident dicta sequi atque blanditiis obcaecati in. Magnam eveniet illum repellat nostrum voluptas soluta. Voluptates eligendi nam nobis accusantium obcaecati.
            Sunt quisquam assumenda eveniet! Iure quae culpa delectus modi ad? Minima optio alias earum totam, distinctio possimus. Necessitatibus voluptatum, omnis facere, rem harum, similique consequuntur vero ab quo ex possimus.
            Molestiae ea est tenetur! Aliquid quasi eius sit quidem! Numquam esse facilis dolores eaque alias magni placeat consectetur voluptatibus rem aperiam neque odio, est sint eveniet expedita ad animi aliquam.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores magni dolor hic alias eos assumenda maiores porro nulla praesentium unde possimus, quae optio magnam commodi nobis delectus provident dolorem iste!
            Neque dolorem eius esse maiores minus? Totam accusantium iste molestias, maxime eum asperiores voluptatibus beatae? Eveniet, suscipit, nihil est, natus eius dicta soluta illo dolorum quidem dolore blanditiis. Neque, assumenda.
            Rem, enim nulla praesentium minima debitis totam suscipit accusamus, eaque provident dicta sequi atque blanditiis obcaecati in. Magnam eveniet illum repellat nostrum voluptas soluta. Voluptates eligendi nam nobis accusantium obcaecati.
            Sunt quisquam assumenda eveniet! Iure quae culpa delectus modi ad? Minima optio alias earum totam, distinctio possimus. Necessitatibus voluptatum, omnis facere, rem harum, similique consequuntur vero ab quo ex possimus.
            Molestiae ea est tenetur! Aliquid quasi eius sit quidem! Numquam esse facilis dolores eaque alias magni placeat consectetur voluptatibus rem aperiam neque odio, est sint eveniet expedita ad animi aliquam.
        </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li>
                    <a href=""><?= $tag ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href=""><?= $category ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/header.php");
?>