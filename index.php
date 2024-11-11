<?php
if(isset($_POST['name']))
{

    $server= "localhost";
    $username = "root";
    $password = "";

    $con= mysqli_connect($server, $username, $password);

    if(!$con)
    {
        die("Connection to this database has failed due to " . mysqli_connect_error());
    }

    echo "Success";

    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $Blog_title=$_POST['Blog_title'];
    $Blog=$_POST['Blog'];
    $sql= " INSERT INTO `blog_deets`.`blog` (`Name`, `Age`, `Email ID`, `Phone No`, `Blog Title`, `Blog Content`) VALUES ('$name', '$age', '$email', '$phone', '$Blog_title', '$Blog');";

    echo $sql;

    if($con->query($sql)== true){
        echo "Succesfully Inserted!";
    }
    else{
        "ERROR: $sql <br> $conn->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts Page</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <img src="Patterns and Closeups.jpg" alt="bgimg">
    <div class="container">
        <h1>Welcome to Our Page! <br> Submit your blogs here!!</h1>
        <p>Let your creativity flow in your blogs :3</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="email" name="email" id="email" placeholder="Enter Your Email-ID">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <input type="text" name="Blog_title" id="Blog_title" placeholder="Enter Blog Title">
            <textarea name="Blog" id="Blog" cols="30" rows="10" placeholder="Enter Your Blog Content here"></textarea>
            <button class="button">Submit</button>
            <!-- <button type="button">Reset</button> -->
        </form>
        
    </div>
    <script src="working.js"></script>
    
</body>
</html>