<?php


//Confirmed
function postNumber($phone){
    include "../connect.php";
    $last_id = $_SESSION['lastID'];
    $sql = "UPDATE user SET User_Phone = $phone
    WHERE User_ID = $last_id;";
    if ($conn->query($sql) === TRUE) { 
        echo "Phone Number Insert was Successful";
        header('Location: http://68.183.177.183/mysejahteri/View/tacno.php');
    }
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<br>";
}

//push random num
function randNUm($randnum){
    include "../connect.php";
    $last_id = $_SESSION['lastID'];
    $sql = "UPDATE user SET user_tac='$randnum' WHERE user_id='$last_id'";
    
    echo "<br>";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//fail
function postReturnTAC(){
    session_start();
    $last_id = $_SESSION['lastID'];
    include "../connect.php";
    include "../Model/mobileno_model.php";

    $_SESSION['status'] = "Name (a-z, A-Z, space only) or Number (numbers only) inserted was invalid";
    $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
    //execute
    $conn->query($sql);
    header('Location: http://68.183.177.183/mysejahteri/');
}

?>