<?php include('layout/header.php'); ?>
<div class="d-flex justify-content-between">
    <div class="mb-5">
        <h1 class="">Title</h1>
        <p class="font-weight-normal">Date Created</p>
    </div>
    <button class="btn btn-danger btn-sm" style="height: 40px">Delete Blog post</button>
</div>
<div class="d-flex flex-column align-items-center">
    <form method="post" action="model.php" class="d-flex flex-column">
        <textarea rows="10" cols="100" nanme="post" class="px-3 py-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus libero ratione, iure architecto est esse eum veritatis consectetur error ut? Aspernatur voluptatem, porro ipsam culpa quod illum id architecto officia?</textarea>
        <input type="submit" value="Done" class="btn btn-success mt-3" style=""/>
    </form>
</div>
<?php include('layout/footer.php'); ?>

