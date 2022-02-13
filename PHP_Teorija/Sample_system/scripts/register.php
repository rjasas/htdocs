<?php include '../layout/header.php'?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Please Upload 4 Images to Gallery</div>
                <div class="card-body">
                   <form action="..\scripts\signUp.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="fname">
                            <input type="text" class="form-control" placeholder="Last Name" name="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="your@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <input type="epassword" class="form-control" placeholder="Password" name="password">
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'?>