<?php
session_start();
$last_id = $_SESSION['lastID'];
include_once "../connect.php";


$companyName= $_POST['company_name']; 
$companyLocation = $_POST['company_location'];

echo $companyLocation;

companyInfo($companyName,$companyLocation);

function companyInfo($companyName,$companyLocation){
    include "../Model/backcard_model.php";
    //push to db
    postCompany($companyName,$companyLocation);

}

?>