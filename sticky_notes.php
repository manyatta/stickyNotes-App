<?php

require_once('connection.php');

$query = "SELECT * FROM stickynotes";
$run = mysqli_query($conn,$query);

$response = array();

while($row = mysqli_fetch_assoc($run)){
    array_push($response, 
    array(
        'id' => $row['id'],
        'title' => $row['title'],
        'note' => $row['note'],
        'color' => $row['color'],
        'date' => $row['date']
        ));
}
echo json_encode($response);

?>