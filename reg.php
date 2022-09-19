<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];        
    $psw = $_POST['psw']; 
     $psw1 = $_POST['psw1'];      

     $sql = "INSERT INTO user (name, email,psw,psw1)
     VALUES ('$name', '$email', '$psw', '$psw1')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        echo "Login Here: <a href='login.php'>Login Here</a>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
}
     mysqli_close($conn); 