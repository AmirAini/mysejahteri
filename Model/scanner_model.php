<?php 

//To get TAC from DB and verify
function selectTAC($tac){
    include "../connect.php";
    session_start();
    $last_id = $_SESSION['lastID'];
    $sql = "SELECT user_tac FROM user WHERE User_ID = $last_id;";
    //execute then store query
    $result= $conn->query($sql);
    $verifyArr =[];
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        //   echo "tac: " . $row["user_tac"];
        array_push($verifyArr,$row["user_tac"]);
        }
    } else {
        echo "0 results";
        }
    if ($tac == $verifyArr[0]){
        header('Location: http://68.183.177.183/mysejahteri/View/scanner.php');
        echo "You have been verified";}
    else {
        header('Location: http://localhost/backend/try');
        //query
        $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
        //execute
        $conn->query($sql);
        }

}


?>