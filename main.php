<main>
    <div>
        <h1>Blog Codar</h1>
        <h2>Este é um blog sobre programação</h2>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h4 class="post-title"> 
                        <a href="post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h4>
                        <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                    <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>