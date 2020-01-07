<?php

require_once('connection.php');

$id = $_POST['id'];

$query = "DELETE FROM stickynotes WHERE id='$id'";

if(mysqli_query($conn, $query)){
    $response['success'] = true;
    $response['message'] = "succesifully";
}else{
    $response['success'] = false;
    $response['message'] = "fail";
}
echo json_encode($response);
?>