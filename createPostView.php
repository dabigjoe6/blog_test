<?php include('layout/header.php'); ?>
<div class="d-flex justify-content-between pt-5">
    <?php if(isset($_SESSION['error_message'])): ?>
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['error_message'] ?>
        </div>
    <?php endif ?> 
   
</div>
<div class="d-flex justify-content-between col-12" style="width: inherit;">
        <h2 class="font-weight-medium mb-5">Create New Post</h2>
        <a href="index.php" class="btn btn-link">Back</a>
    </div>
<div class="d-flex flex-column align-items-center">
    
    <form method="post" action="create_post.php" class="d-flex flex-column">
        <input type="text" class="mb-3 px-3 py-2 rounded font-weight-bold" name="title" placeholder="Enter Title Here" />
        <textarea rows="10" cols="100" name="post" placeholder="Enter your post here" class="px-3 py-2 rounded"></textarea>
        <input type="submit" value="Done" class="btn btn-success mt-3" style=""/>
    </form>
</div>
<?php include('layout/footer.php'); ?>

