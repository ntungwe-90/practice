<?php

if (isset($_POST['submit'])) {
  include 'db.php';

  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $age = mysqli_real_escape_string($conn,$_POST['age']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  // Up to the last line of code above we've already been thru them so i won't go over them.

  // here we check the various variables if any of them are empty. check for key variables.
  if (empty($name)||empty($age)||empty($email)||empty($password)) {
    //if any of them are empty, redirect the user back to the registration page with an error message in the url.
    // the error message can be picked up from the registration page to be displayed appropiately to the user.
    header('Location:test.php?error=fill in all field');
  }elseif ($age<18) {
    // Again we check the age of the user, if below 18, redirect with an error message.
    //you may add more validation rules to the various variables you want to check on
    header('Location:test.php?error=You are underaged to use this platform');
  }else{
    // if all inputs are valid, we encrypt the password using the password_hash function for security reasons
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);

    //insert the data into our database specifying the database name(users_db), the columns in the db we want to insert data into then the
    //values to be inserted in the order of the columns
    $insertrecord = "INSERT INTO student(name,age,email,password)VALUES('$name','$age','$email','$hashedpassword');";

    //the mysqli_query function is the function the run the insert query
    mysqli_query($conn,$insertrecord);

    //once done, we redirect the user to the login page with a success message.
    header('Location:dashboard.php?success=Account successfully created');
  }

}

 ?>
