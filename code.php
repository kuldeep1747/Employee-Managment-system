<?php include('includes/dbconfig.php')?>


<?php

if(isset($_POST['register-btn']))
{
    
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    // if($fname != "" && $email != "" && $salary != ""){

    $query = "INSERT INTO register(fname,email,salary) VALUES('$fname','$email','$salary')";
    $query_run = mysqli_query($conn,$query); 

    if($query_run){

        $_SESSION['status']="Registration Successfully";
        $_SESSION['status_code']="success";
        //echo "Registration Successfully";
        header('Location:Empindex.php');
    }else
    {
        $_SESSION['status']="Something Went Wrong";
        $_SESSION['status_code']="error";
        //echo "Something Went Wrong";
        header('Location:register.php');
    }
    // }else
    // {
    //     //echo "All inpute filed reqiure";
    //     echo "<script>alert('All Input Field Require');</script>";
    //     // header("Location:register.php");
    // }

}
if(isset($_POST['register_update_btn']))

{
    $update_id= $_POST['edit_id'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $salary=$_POST['salary'];

    $query_update ="UPDATE register SET fname='$fname',email='$email',salary='$salary' WHERE id ='$update_id'";
    $query_update_run = mysqli_query($conn,$query_update);

    if($query_update_run)
    {
        $_SESSION['status']="Data Updated Successfully";
        $_SESSION['status_code']="success";
        //echo "Data Updated";
        header("Location:Empindex.php");
    }
    else
    {
        $_SESSION['status']="Data Not Updated ";
        $_SESSION['status_code']="error";
        //echo "Data Not Updated";
        header("Location:Empindex.php");

    }
}

if(isset($_POST['register-delete_btn']))
{
    $delete_id=$_POST['delete_id'];

    $del_query = "DELETE FROM register WHERE id='$delete_id'";
    $del_query_run = mysqli_query($conn,$del_query);
    if($del_query_run)
    {
        $_SESSION['status']="Data Delete Successfully";
        $_SESSION['status_code']="success";
        header("Location: Empindex.php");
    }
    else
    {
        $_SESSION['status']="Data Not Delete Successfully";
        $_SESSION['status_code']="error";
        header("Location: Empindex.php");
    }
}


?>