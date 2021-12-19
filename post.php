<?php
include ("data/posts.php");
include ("data/categories.php");


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!-- ESTILO DO SITE -->
    <link rel="stylesheet" href="css/estilo.css">
    <!-- FONTES DO SITE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
</head>
<body>
<?php
include "header.php";

if(isset($_GET['id'])) {
    $postID = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postID){
            $currentPost = $post;
        }
    }
}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"> <?= $currentPost['description'] ?></p>
            <div id="img-container">
                <img src="img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ipsa non, deleniti sit aspernatur quidem suscipit beatae vel quae cumque eveniet obcaecati sequi magnam dolores, placeat laboriosam quaerat corrupti vitae!
        Iusto fugit, aliquam autem debitis dicta aperiam iure similique earum assumenda corrupti sunt commodi illo odit? Optio repudiandae eius magnam animi iusto incidunt fugiat mollitia perspiciatis itaque hic, placeat laboriosam?
        At culpa dolor quidem suscipit. Quod earum ut quis temporibus, ab recusandae nulla eaque libero deleniti debitis officiis nesciunt, repellat repudiandae, ipsum magnam ullam voluptatem molestias quaerat deserunt eius accusantium.
        Ipsum quisquam maiores totam quos? Quae quam voluptates repudiandae perferendis, dolore amet, doloribus soluta labore molestiae at illo officiis eaque minima tenetur in delectus magnam consequuntur cum vel illum! Rem!
        Nam excepturi autem culpa explicabo ut maiores ullam nostrum eum, consequuntur obcaecati. Esse vero similique consectetur eligendi autem ea tempore at quo ipsum eveniet, laborum numquam iusto optio voluptas. Earum.</p>
    </div>
    <aside id="nav-container">
    <h4 id="tags-title">Tags</h4>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href=""><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h4 id="categories-title">Categorias</h4>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href=""><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include "footer.php";
?>

   
</body>
</html>