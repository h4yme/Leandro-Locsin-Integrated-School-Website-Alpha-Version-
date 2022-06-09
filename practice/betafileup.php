<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6451134";
$password = "WC8f11v2em";
$dbname="sql6451134";
$port="3306";


$conn = mysqli_connect("localhost", "root", "", "registration");



if (isset($_POST['register'])){
    $filen=$_POST['filen'];
    

    $query= "INSERT INTO trys(fileyarn) VALUES('$filen')";

    $result= mysqli_query($conn, $query);
    if ($result){
        echo "<script>alert('You have successfully registered')</script>";
        
    }else{
        echo "<script>alert('Failed to registered')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
   

<body>
 <form method="post">
   
 <form action="/action_page.php">
  <input type="file" id="myFile" name="filen">
  <input type="submit" name="register">
</form>

 
</body>
</html>