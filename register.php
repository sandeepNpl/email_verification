<?php 
$page_title = "Register Page";
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                         
                        <form action="code.php" method="POST">
                            <div class="row-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name ="name"class="form-control">
                            </div>

                            <div class="row-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name ="phone"class="form-control">
                            </div>

                            <div class="row-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name ="name"class="form-control">
                            </div>

                            <div class="row-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name ="password"class="form-control">
                            </div>

                            <div class="row-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="text" name ="confirm_passsword"class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register Now</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>