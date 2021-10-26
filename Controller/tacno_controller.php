<?php
session_start();
$last_id = $_SESSION['lastID'];

echo $_POST['phone'];

$phone = ($_POST['phone']);
number($phone);


//?validate 
function number ($phone){
    include "../connect.php";
    include "../Model/tac_model.php";
    $regex = "/^[\d\-]+$/";

    //check
    if(preg_match($regex,$_POST['phone'])){  
        
        //if ok
        postNumber($phone);
        $rand = rand(100000,999999);
        $_SESSION['rand'] = $rand;
        randNum($rand);
        return $phone;
    
    } //else

    else {
        postReturnTAC();
    }
}




?>