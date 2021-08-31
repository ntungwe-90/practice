
<?php
if (isset($_POST['codetrain'])){
    // echo  " <P>button has been clicked </p>";
    include_once 'db.php';
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $age =mysqli_real_escape_string($conn,$_POST['age']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    
    
} 
else{  
   echo " <p> button has not been  clicked </p>";
}
?>
