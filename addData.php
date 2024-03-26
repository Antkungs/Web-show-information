<?php
    require 'connect.php';
  
    if(isset($_POST['submitCheck'])){
        $_SESSION['Username'] = $_POST['Username'];
        $_SESSION['Password'] = $_POST['Password'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['nName'] = $_POST['nName'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['zipCode'] = $_POST['zipCode'];
        $_SESSION['status'] = $_POST['status'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tel'] = $_POST['tel'];
        $_SESSION['army'] = $_POST['army'];
        $_SESSION['study'] = $_POST['study'];
        $_SESSION['jobPosition'] = $_POST['jobPosition'];
        $_SESSION['point'] = $_POST['point'];
        $_SESSION['coin'] = $_POST['coin'];
  }
    else {
        $_SESSION['Username'] = "null";
        $_SESSION['Password'] = "null";
        $_SESSION['gender'] = "null";
        $_SESSION['fname'] = "null";
        $_SESSION['lname'] = "null";
        $_SESSION['nName'] = "null";
        $_SESSION['age'] = "null";
        $_SESSION['address'] = "null";
        $_SESSION['zipCode'] = "null";
        $_SESSION['status'] = "null";
        $_SESSION['email'] = "null";
        $_SESSION['tel'] = "null";
        $_SESSION['army'] = "null";
        $_SESSION['study'] = "null";
        $_SESSION['jobPosition'] = "null";
        $_SESSION['point'] = "null";
        $_SESSION['coin'] = "null";

  }
  $sql = "INSERT INTO emmployeeform (username,password,prefix,fname,lname,nname,bdate,address,zipcode,status,email,tel,armyStatus,studyStatus,jobPosition,levelJob,salary)
  VALUES ('".$_SESSION['Username']."','".$_SESSION['Password']."' ,'".$_SESSION['gender']."' ,'".$_SESSION['fname']."' ,'".$_SESSION['lname']."' ,'".$_SESSION['nName']."','".$_SESSION['age'] ."','".$_SESSION['address']."','".$_SESSION['zipCode']."','".$_SESSION['status']."','".$_SESSION['email']."','".$_SESSION['tel']."','".$_SESSION['army']."','".$_SESSION['study']."','".$_SESSION['jobPosition']."','".$_SESSION['point']."','".$_SESSION['coin']."')";
  mysqli_query($conn, $sql);
  header('Location:login.php');
?>
