<?php include('includes/dbconfig.php')?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration logic
if(isset($_POST["reg_btn"])){
    $username = $_POST['username'];
     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location:index.php");
        
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php
// // Database connection
// // $servername = "localhost";
// // $username = "root";
// // $password = "";
// // //$dbname = "user_authentication";
// // $dbname = "phpcrud";



// //$conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Registration logic
//  if(isset($_POST("reg_btn"))){
// //if ($_SERVER["REQUEST_METHOD"] == "POST['reg_btn']") {
//     $username = $_POST['username'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//     $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
//     echo "Registration successful!";  
//     if ($conn->query($sql) === TRUE) {
//         echo "Registration successful!";    
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     } 
// }

// $conn->close();


// include('includes/dbconfig.php');

// Database connection
// $conn = new mysqli($servername, $username, $password, $dbname);

