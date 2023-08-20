  <!-- <?php error_reporting(0); ?>  -->
<!--<?php error_reporting(0); ?>  -->
  <?php
$con=new mysqli("localhost","root","","temp");
if(isset($_POST['sub']))
{
    $em=$_POST['email'];
    $ps=$_POST['password'];
    $q1="select * from signup where email='$em' AND password='$ps'";
    $run=mysqli_query($con,$q1);
    // $row=mysqli_fetch_array($run);
    // echo($row);
    // $u=$row['email'];
    // $p=$row['password'];
    if ($run->num_rows == 1) {
        // Start a session and store user data
        session_start();
        $_SESSION['email'] = $em;
    
        // Redirect to a logged-in page
        header("Location: home.php");}
    else{
        header("location:login.php?wrong user");
    }
}



?> 

