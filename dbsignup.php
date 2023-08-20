<?php
$con=new mysqli("localhost","root","","temp");
if(isset($_POST['sub1'])){
    $un=$_POST['username'];
    $em=$_POST['email'];
    $ps=$_POST['password'];
$q="select * from signup where username='$un' ";
$unresult=mysqli_query($con,$q);
$un_count=mysqli_num_rows($unresult);

$q="select * from signup where username='$em' ";
$emresult=mysqli_query($con,$q);
$em_count=mysqli_num_rows($emresult);

if($un_count==0 &&  $em_count==0 ){
    
        $sq="insert into signup(username,email,password)values('$un','$em','$ps')";
        $sresult=mysqli_query($con,$sq);
        if($sresult)
        {
            header("location:home.php");
        }
    else{
        if($unresult==0){
           echo' <script> username already exists</script>';
        }
        if($emresult==0){
            echo' <script> email already exists</script>';
         }
    }
}



}

?>