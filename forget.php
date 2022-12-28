<?php
if ($_POST) {
    if (isset($_POST['reset']) == "Reset") {
        // echo "lllllllllllllllll";
        // step 1 : Get The data from the inputs
        $email = $_POST['email'];
        $password = $_POST['password'];
        // step 2 : connect to database
        include_once 'serverconf.php';
        global $link;
        $conn = $link;
        // step 3 : send data to database
        // 3.1 create sql query
        $sql = "UPDATE customer SET password = '$_POST[password]' WHERE email='$_POST[email]'";
        //echo $sql;
        //echo '<br>';
        // 3.2 execute query
        if ($conn->query($sql) === TRUE) {
            //step 4 : return database result
            echo "New password created successfully";
            header("Location:loginpage.html");
        } else {
            //step 4 : return database result
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location:forget.html");
        }
        echo 'controller activated';
    }
}
?>