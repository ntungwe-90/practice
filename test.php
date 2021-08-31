<!DOCTYPE html>
<html lang="en">

 <link rel="stylesheet" href="css/styles.css">
 
</head>
<body>
<form action="formprocessor.php" method="POST">
<h3 class="text-center font-weight-bold"> Register Here </h3>
       
        Name<input  style="border:2px solid grey; padding: 12px 20px; width: 100%; box-sizing: border-box;" type="text" name="name"><br>
        Age: <input style="border:2px solid grey; padding: 12px 20px; width: 100%; box-sizing: border-box;" type="number" name="age"><br>
        E-mail: <input style="border:2px solid grey; padding: 12px 20px; width: 100%; box-sizing: border-box;" type="email" name="email"><br>
        Password: <input style="border:2px solid grey; padding: 12px 20px; width: 100%; box-sizing: border-box;" type="password" name="password"><br>
        <!-- Gender:   <input type="radio" name="gender" value="female">Female
         <input type="radio" name="gender" value="male">Male  -->

        <div>
         <button style="background-color: grey; color: white;  padding: 16px 32px; margin: 4px 2px; cursor: pointer; width:100%" type="submit" name="submit">SUBMIT</button> 
</div> 
       <!-- <input style="background-color: blue; color: white;  padding: 16px 32px; margin: 4px 2px; cursor: pointer;" type="submit">  -->
   </form>   
    
</body>

</html>