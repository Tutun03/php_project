<?php
$insert=false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   // echo "Success connecting to the db";
   $name=$_POST['name'];
   $gender=$_POST['gender'];
   $age=$_POST['age'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $desc=$_POST['desc'];
   $sql = "INSERT INTO `trip` .`trip`( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
  //echo $sql;

  if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else {
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form </title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class ="bg" src="mc.jpg" alt="uem-kolkata">
    <div class ="container">
      <h1>Welcome to UEM USA TRIP plan</h1>
    <p>Enter your details to confirm your participation in the trip</p>
     <p>submit this form carefully</p>
     <?php
     if($insert==true){
      echo "<p class='submitm'>Thanks for filling this form.we are happy to see you joining with us</p>";
     }
     ?>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name"placeholder="Enter your name" >
        <input type="text" name="gender" id="gender"placeholder="Enter your gender" >
        <input type="age" name="age" id="age"placeholder="Enter your age" >
        <input type="email" name="email" id="email"placeholder="Enter your email" >
        <input type="phone" name="phone" id="phone"placeholder="Enter your phone" >
        <textarea name="desc" id="desc" cols="30" rows="10"placeholder= "enter any other information"></textarea>
         <button class="btn">submit</button>
    </form>
    
    
</div>
    <script src="index.js"></script>
     

</body>
</html>