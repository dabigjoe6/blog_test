<?php require('BlogModel.php');
    $db = new BlogModel();

    $posts = $db->getPosts();
?>
<?php include('layout/header.php'); ?>

<div class="d-flex justify-content-between bg-white position-fixed container pt-5" style="z-index: 100; width: inherit;">
    
    <h1>Blog posts</h1>
    <button class="btn btn-primary btn-sm" style="height: 40px">Create Blog post</button>
</div>

<div class="d-flex flex-column align-items-center" style="position: relative; top: 100px">
    <?php foreach($posts as $post): ?>
        <div class="col-6 my-5 border py-4 rounded">
            <h4 class="font-weight-bold mb-0"><?= $post['title'] ?></h4>
            <p class="font-weight-normal"><?= $post['date_created'] ?></p>
            <p class="text-wrap mb-0"><?= $post['post']?></p>
            <a href="post.php?id=<?= $post['id'] ?>" class="btn btn-link mt-3" style="position: absolute; right: 0px">Edit</a>
        </div>
    <?php endforeach ?>
</div>

<?php include('layout/footer.php'); ?>