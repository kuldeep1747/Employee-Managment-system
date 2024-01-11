<?php
// session_start();
// session_destroy();
// echo " you logout succes";//<a href="index.php">Go back</a>';
// header("Location:index.php");


session_start();
if (! empty($_SESSION['logged_in']))
{
    ?>
<?php 
$_SESSION['status']="Data Delete Successfully";
        $_SESSION['status_code']="success";
        ?>
    <a href='logout.php'>Click here to log out</a>
    <?php session_destroy();?>
    <?php
}
else
{
    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
    // if(isset)
    // header("Location:login.php");
}
?>