<?php include_once('include/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center my-5">User Information</h3>
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success btn-sm float-end" href="user_list.php">Get data</a>
                    <h5 class="card-title">User Data</h5>
                </div>
                <div class="card-body">
                    <form action="process.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter your password" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Upload Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Upload image" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-3" style="float:right">Submit</button>
                    </form>
                </div>
            </div>
</div>
<?php include_once('include/footer.php'); ?>