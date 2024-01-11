<?php include('includes/dbconfig.php')?>

<?php
// Database connection (same as register.php)

// Login authentication logic
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["logi_btn"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
           echo "Login successful!";
           header("Location:Empindex.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
