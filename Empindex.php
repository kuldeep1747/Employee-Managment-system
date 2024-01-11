  
<?php include('includes/header.php')?>
<?php include('includes/dbconfig.php')?>

<!-- <?php include('logout.php')?> -->


      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="card">
              <div class="card-header">

              <h4>Employee Data
                <a href="register.php" class="btn btn-primary float-right">Register / Add</a>
                <a href='logout.php' class="btn btn-primary">Logout</a>
                <!-- <a href='login.php' class="btn btn-primary">Logout</a> -->
              </h4>
              <div class="card-body">
              
              
              <?php
              $register ="SELECT * FROM register";
              $register_run = mysqli_query($conn,$register);
if(mysqli_num_rows($register_run)>0)
{
  ?>

  
  

 
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                  while($reg_row =mysqli_fetch_array($register_run))
                  {
                  ?>
                    <tr>
                    <td>  <?php echo $reg_row['id'];  ?>  </td>
                      <td>  <?php echo $reg_row['fname'];  ?>  </td>
                      <td><?php echo $reg_row['email'];  ?></td>
                      <td><?php echo $reg_row['salary'];  ?></td>
                      
                      <td>
                      <a href="register-edit.php?id=<?php echo $reg_row['id'];  ?>" class="btn btn-info ">Edit</a>
                      </td>
                      <td>
                        <form action="code.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $reg_row['id'];  ?>">
                        <button type="submit" name="register-delete_btn" class="btn btn-danger">Delete</button>
                        </form>
                      
                      </td>
                    </tr>
                  <?php }  ?>
                  </tbody>
                </table>
                <?php

                  }
                  else
                  {
                  echo "NO Record Found";
                  }
              ?>
              </div>

              </div>
            </div>

          </div>
        </div>
      </div>
      
      

      <?php include('includes/footer.php')?>




      