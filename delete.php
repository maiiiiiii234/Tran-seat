<?php
if ($_POST) {
    if (isset($_POST['delete']) == "Delete") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$sql = "DELETE FROM customer WHERE id=12";
        $sql = "DELETE FROM `customer` WHERE email='" . $email . "' AND password='" . $password . "'";
        include_once 'serverconf.php';
        global $link;
        $conn = $link;
        $res = $conn->query($sql);
        //check if query returned more than 1 row
        if ($res === TRUE) {
            echo "We lost you :(";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

?>