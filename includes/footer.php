<!-- Optional JavaScript; choose one of the two! 

        Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 <!-- Option 2: Separate Popper and Bootstrap JS -->
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      <script src="js/sweetalert.js"></script>

      
      <?php
      if(isset($_SESSION['status']) && $_SESSION['status']!= '')
      {
        ?>
 <script>
swal({
  title: "<?php echo $_SESSION['status']; ?>",
  //text: "You clicked the button!",
  icon: "<?php $_SESSION['status_code']?>",
  button: "Ok Done",
});      </script> 
        <?php
        unset($_SESSION['status']);
      }
      ?>
      


      <!-- <marquee class="blink" color="white">This is Employee Mangment system.</marquee> -->

      
      <marquee behavior="scroll" direction="left" scrollamount="5">
    <img src="images/img1.png" width="300" height="300" alt="Natural" />
    <img src="images/img2.png" width="300" height="300" alt="Natural"  />
    <img src="images/img3.png" width="300" height="300" alt="Natural"  />
    <img src="images/img4.png" width="300" height="300" alt="Natural"  />
    <img src="images/img5.png" width="300" height="300" alt="Natural"  />
    
    <img src="images/img1.png" width="300" height="300" alt="Natural" />
    <img src="images/img2.png" width="300" height="300" alt="Natural"  />
    <img src="images/img3.png" width="300" height="300" alt="Natural"  />
    <img src="images/img4.png" width="300" height="300" alt="Natural"  />
    <img src="images/img5.png" width="300" height="300" alt="Natural"  />


  </marquee>

      </body>
  </html>