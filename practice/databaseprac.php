<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6451134";
$password = "WC8f11v2em";
$dbname="sql6451134";
$port="3306";


$conn = mysqli_connect($servername, $username, $password, $dbname, $port);



if (isset($_POST['register'])){
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $grade1=$_POST['grade1'];
    $birthdate=$_POST['birthdate'];
    $place=$_POST['place'];
    $email=$_POST['email'];
    $mnum=$_POST['mnum'];
    $gend=$_POST['gend'];
    $add=$_POST['add'];
    $city=$_POST['city'];
    $pin=$_POST['pin'];
    $filen=$_POST['filen'];
    $query= "INSERT INTO users(firstname, middlename, lastname, grade, birthdate, place, email, mobile, gender, addrs, city, pincode, img) VALUES('$fname','$mname','$lname','$grade1','$birthdate','$place','$email', '$mnum','$gend', '$add', '$city', '$pin','$filen')";

    $result= mysqli_query($conn, $query);
    if ($result){
        echo "<script>alert('You have successfully registered')</script>";
        
    }else{
        echo "<script>alert('Failed to registered')</script>";
    }
}
?>

