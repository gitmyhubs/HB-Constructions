    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
                <p style="color: #7f888f; margin: 0 auto;">Welcome <strong><?php echo ucfirst($_SESSION['username']); ?></strong></p>
                
              <?php endif ?>



              #f8cb2e



              <?php 
    // Connecting to database 
    $conn = mysqli_connect("localhost","u426408942_hbconst","@#HBconstructions1234","u426408942_hbconst") or die("Unable to connect to Database");

?>