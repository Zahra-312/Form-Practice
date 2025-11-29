<?php
 $server   = "localhost";
 $username = "root";
 $password = "";
 $dbname   = "webcode";

 $conn = mysqli_connect($server,$username,$password,$dbname);

 if(isset($_POST['submit'])){
    $sname  = $_POST['sname'];
    $fname  = $_POST['fname'];
    $add    = $_POST['address'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO table01(sname, fname, address, email, phone, gender) 
            VALUES ('$sname', '$fname', '$add', '$email', '$phone', '$gender')";


    if(mysqli_query($conn, $sql)){
        echo "Data Inserted successfully";
    }else{
        echo "ERROR".mysqli_error ($conn);
    }
 }
?>