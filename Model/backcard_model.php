<?php

function postCompany($companyName,$companyLocation){
    include "../connect.php";
    session_start();
    $last_id = $_SESSION['lastID'];

    $sql = "INSERT INTO customer (User_ID,Customer_Location, Customer_Activities)
        VALUES ('$last_id','$companyLocation','$companyName');";
        //execute
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            (header('Location: http://localhost/backend/try/View/backcard.php'));
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>