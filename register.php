<?php include('includes/header.php')?>


<div class="container">
    <div class="row">
        <div class="col-md-10">
    <div class="card">
        <div class="card-header">
        <h4>Register Now</h4>
            <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="form-grup">
                        <label>Full Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter Full Name" required >
                    </div>
                    <div class="form-grup">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-grup">
                        <label>Salary</label>
                        <input type="text" name="salary" class="form-control" placeholder="Enter salary" required>
                    </div>
                    <a href="Empindex.php" class="btn btn-denger">Cancel</a>
                    <button type="submit" name="register-btn" class="btn btn-primary">Submit</button>


                </form>
            </div>
        </div>
    </div>


        </div>
    </div>
</div>




<?Php include('includes/footer.php') ?>