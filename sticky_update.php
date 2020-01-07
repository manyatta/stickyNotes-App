<?php

require_once('connection.php');

$id = $_POST['id'];
$title = $_POST['title'];
$note = $_POST['note'];
$color = $_POST['color'];

$query = "UPDATE stickynotes SET title='$title', note='$note',color='$color' WHERE id='$id'";
$run = mysqli_query($conn, $query);

if($run){
    $response['success'] = true;
    $response['meassage'] = "succesifully";
}else{
    $response['success'] = false;
    $response['meassage'] = "fail";
}
echo json_encode($response);

?>