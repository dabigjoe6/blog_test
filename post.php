<?php 
    require('BlogModel.php');

    $db = new BlogModel();

    $id = $_GET['id'];
    $data = $db->getPost($id);
?>

<?php include('layout/header.php'); ?>
<div class="d-flex justify-content-between pt-5">
    <?php if(isset($_SESSION['error_message'])): ?>
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['error_message'] ?>
        </div>
    <?php endif ?>
    <div class="mb-5">
        <h1 class=""><?= $data['title'] ?></h1>
        <p class="font-weight-normal"><?= $data['date_created'] ?></p>
    </div>
    <a href="delete_post.php?id=<?= $id ?>" class="btn btn-danger btn-sm" style="height: 40px">Delete Blog post</a>
</div>
<div class="d-flex flex-column align-items-center">
    <form method="post" action="update_post.php" class="d-flex flex-column">
        <textarea rows="10" cols="100" name="post" class="px-3 py-2"><?= $data['post'] ?></textarea>
        <input type="hidden" name="id" value=<?= $data['id'] ?> />
        <input type="submit" value="Done" class="btn btn-success mt-3" style=""/>
    </form>
</div>
<?php include('layout/footer.php'); ?>

