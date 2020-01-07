<?php

include_once("connection.php");
$title = $_POST['title'];
$note = $_POST['note'];
$color = $_POST['color'];

$query = "INSERT INTO stickynotes (title, note, color) VALUES('$title', '$note', '$color')";
$run = mysqli_query($conn, $query);

if($run){
    $response['success'] = true;
    $response['message'] = "Succesifully";
    
    
}else{
    
    $response['success'] = false;
    $response['message'] = "Failed";
}

echo json_encode($response);

mysqli_close($conn);

?>