<?php include('includes/header.php')?>
<?php include('includes/dbconfig.php')?>

<?php


$getemp="select * from register";
$getemp_run=mysqli_query($conn,$getemp);
     if(isset($getemp_run))
 {
// //     echo "$getemp";
// // }
// if(mysqli_num_rows($register_run)>0)
// {
  ?>
  

  
  

 
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Salary</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                  while($reg_row =mysqli_fetch_array($getemp_run,MYSQLI_ASSOC))
                  {
                  ?>
                    <tr>
                    <td>  <?php echo $reg_row['id'];  ?>  </td>
                      <td>  <?php echo $reg_row['fname'];  ?>  </td>
                      <td><?php echo $reg_row['email'];  ?></td>
                      <td><?php echo $reg_row['salary'];  ?></td>
                      
                      
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
<?php include('includes/footer.php')?>