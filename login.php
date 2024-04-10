<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User mainLogin Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

        <style>
      body{
            background-color: 	 #004d4d;
        }

        .container{
            margin:auto;
            padding-left: 8px;
            padding-bottom: 5px;
            padding-top: 5px;
            width: 400px;
            background-color: #ffcccc;
        }
        /* .firstdiv{
            margin:auto;
            padding-left: 8px;
            padding-bottom: 5px;
            padding-top: 5px;
            width: 400px;
            background-color: lightblue;
        } */
      
        

        header {
            background-color: whitesmoke;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            /* justify-content: center; */
            background-color: orangered;
           
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        nav a:hover {
            background-color: #777;
        }
    
    </style>

<nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="Employee.php">Employee</a>
    </nav>

        <body>
<div class="container">
    <h2>Admin Login</h2>
    
    <form action="authenticate.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <!-- <button type="submit">Login</button> -->
        <input type="submit" name="logi_btn" value="Login">

    </form>
    

    <p>Don't have an account? <a href="index.php">Register here</a></p>
    </div>
    <?php include('includes/footer.php')?>
</body>
</html>
<!-- <style>
      body{
            background-color: khaki;
        }
        .firstdiv{
            margin:auto;
            padding-left: 8px;
            padding-bottom: 5px;
            padding-top: 5px;
            width: 400px;
            background-color: lightblue;
        }
      
        

        header {
            background-color: whitesmoke;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            /* justify-content: center; */
            background-color: orangered;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        nav a:hover {
            background-color: #777;
        }
    
    </style>



      
      
        
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: whitesmoke;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            /* justify-content: center; */
            background-color: orangered;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        nav a:hover {
            background-color: #777;
        }
    

        .container{
            margin:auto;
            padding-left: 8px;
            padding-bottom: 5px;
            padding-top: 5px;
            width: 400px;
            background-color: lightblue;
        }
      
        </style> -->
        <!-- <body> -->
    <!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="indexhome.php">Employee Mangement</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Empindex.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
     
    </ul>
  </div>
</nav> -->
  
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->