<?php

if ($_POST) {
    if (isset($_POST['register'])  == "Register") {
         // echo "lllllllllllllllll";
         // step 1 : Get The data from the inputs
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $age = $_POST['age'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          // step 2 : connect to database
          include_once 'serverconf.php';
          global $link;
          $conn = $link;
          // step 3 : send data to database
          // 3.1 create sql query
          $sql = "INSERT INTO customer (firstname , lastname ,  age ,  phone ,  email ,  password )" . " VALUES ('" . $fname. "' , '" . $lname. "' , '" . $age. "' , '" . $phone. "' , '" . $email. "' , '" . $password. "')";
          //echo $sql;
          echo '<br>';
          // 3.2 execute query
          function checkconn($conn,$sql){
            if ($conn->query($sql) != TRUE) {
                //step 4 : return database result
                throw new Exception("Value must be 1 or below");
                }
            return true;
          }

          try{
            checkconn($conn, $sql);
            header("Location:drafthome.html");
          }
          catch(Exception $e){
            echo '<script>alert("error: used E-mail")</script>';
            header("Location:loginpage.html");
          }

         //if ($conn->query($sql) === TRUE) {
         ////step 4 : return database result
         //echo "New record created successfully";
         //header("Location:drafthome.html");
         //} else {
         ////step 4 : return database result
         ////echo "Error: " . $sql . "<br>" . $conn->error;
         //echo '<script>alert("error: used E-mail")</script>';
         //header("Location:loginpage.html");
         //} 
         ////echo 'controller activated';
    }
} 
