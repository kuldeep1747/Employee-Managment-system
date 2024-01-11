<?php include('includes/header.php')?>
<?php include('includes/dbconfig.php')?>


<?php 
$id =$_GET['id'];
$register_query ="SELECT * FROM register WHERE id='$id'";
$register_query_run =mysqli_query($conn,$register_query);

if(mysqli_num_rows($register_query_run) > 0)
{

    while($row =mysqli_fetch_array($register_query_run))
{
    
    ?>
   

<div class="container">
    <div class="row">
        <div class="col-md-10">
    <div class="card">
        <div class="card-header">
        <h4>Register Edit Page</h4>
            <div class="card-body">
                <form action="code.php" method="POST">

                <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id'];?>">

                    <div class="form-grup">
                        <label>Full Name</label>
                        <input type="text" name="fname" class="form-control" value="<?php echo $row['fname'];?>">
                    </div>
                    <div class="form-grup">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>">
                    </div>
                    <div class="form-grup">
                        <label>Salary</label>
                        <input type="text" name="salary" class="form-control" value="<?php echo $row['salary'];?>">
                    </div>
                    <a href="index.php" class="btn btn-denger">Cancel</a>
                    <button type="submit" name="register_update_btn" class="btn btn-info">Update</button>


                </form>
            </div>
        </div>
    </div>


        </div>
    </div>
</div>
<?php
}

}
else
{
    echo "No Data Fonud";
}
?>



<?Php include('includes/footer.php') ?>