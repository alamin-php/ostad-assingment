<?php include_once('include/header.php'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center my-5">User Information</h3>
                <div class="card">
                    <div class="card-header">
                        <a href="index.php" class="btn btn-success btn-sm float-end"> Back</a>
                        <h5 class="card-title">User Data</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                </tr>
                            <tbody>
                                <?php 
                                $data = './users.csv';
                                $file = fopen($data, 'r');
                                while(($data = fgetcsv($file, 1024, ',')) !== false){?>
                                <tr>
                                    <td><?php echo $data[0]; ?></td>
                                    <td><?php echo $data[1]; ?></td>
                                    <td><img class="rounded-circle" width="48px" src="<?php echo $data[2]; ?>" alt=""
                                    srcset=""></td>
                                </tr>
                                <?php } fclose($file);?>
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
<?php include_once('include/footer.php'); ?>