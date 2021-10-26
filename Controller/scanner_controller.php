<?php 
session_start();
$last_id = $_SESSION['lastID'];
include_once "../connect.php";

$a = $_POST['aa'];
$b = $_POST['bb'];
$c = $_POST['cc'];
$d = $_POST['dd'];
$e = $_POST['ee'];
$f = $_POST['ff'];

//enter
$tac =$a.$b.$c.$d.$e.$f;
tacValid($tac);

//check
function tacValid($tac){
    include "../Model/scanner_model.php";
    echo $tac;
    //get tac from db
    selectTAC($tac);
}


?>