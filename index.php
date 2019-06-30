<?php include('layout/header.php'); ?>

<div class="d-flex justify-content-between">
    <h1 class="mb-5">Blog posts</h1>
    <button class="btn btn-primary btn-sm" style="height: 40px">Create Blog post</button>
</div>
<div class="d-flex flex-column align-items-center">
    <div class="col-6 my-3">
        <h4 class="font-weight-bold mb-0">Title</h4>
        <p class="font-weight-normal">Date Created</p>
        <p class="text-wrap mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus libero ratione, iure architecto est esse eum veritatis consectetur error ut? Aspernatur voluptatem, porro ipsam culpa quod illum id architecto officia?</p>
        <a href="post.php" class="btn btn-link mt-3" style="position: absolute; right: 0px">Edit</a>
    </div>
</div>

<?php include('layout/footer.php'); ?>