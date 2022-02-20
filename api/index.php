<?php
$show=0;
if(isset($_POST['fname'])){
include("connection.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   
   $sql = "INSERT INTO `goa_trip`.`details` (`fname`,`lname`,`age`, `gender`,`phone`,`email`,`address`, `date`)
    VALUES ('$fname', '$lname', '$age', '$gender', '$phone', '$email', '$address', current_timestamp());";

    if($con->query($sql) == true){
        echo '<script>
        alert("Thanks for submitting the form. We will fill you with trip\'s details :)) shortly");
        window.location = "../index.html";
        </script>';
        $show=1;
    }

    else{
        echo "ERROR: $sql <br> $con->error";
        
    }

    $con->close();
}

?>