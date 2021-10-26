<?php 

//! For index to next page
//user
function postName($username1) {
    include "../connect.php";
    $sql = "INSERT INTO user (Name)
    VALUES ('$username1');";
    //push
            if ($conn->query($sql) === TRUE) { 
                echo "Name Insert was Successful";
                header('Location: http://68.183.177.183/mysejahteri/View/mobileno.php');
                //get last id
                $last_id = $conn->insert_id;
                echo $last_id;
            //store page 1
            $_SESSION['lastID'] = $last_id;
            return $last_id;
            }
    
}


//admin
function postAdmin() {
    session_start();
    $last_id = $_SESSION['lastID'];
    include "../connect.php";
    $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
    //execute
    $conn->query($sql);
    header('Location: http://68.183.177.183/mysejahteri/View/adminCheck.php');
}


//fail
function postReturn(){
    session_start();
    $last_id = $_SESSION['lastID'];
    include "../connect.php";

    $_SESSION['status'] = "Name (a-z, A-Z, space only) or Number (numbers only) inserted was invalid";
    $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
    //execute
    $conn->query($sql);
    header('Location: http://68.183.177.183/mysejahteri/try/index.php');
}


?>