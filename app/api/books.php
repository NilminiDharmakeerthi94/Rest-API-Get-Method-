<?php

$app->get('/api/books', function() {
require_once('dbconnect.php');

$query = "select * from books order by id";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){                         //Retieve data from books table
    $data[] = $row;
}
echo json_encode($data);
});

$app->get('/api/books/{id}', function($request){
    require_once('dbconnect.php');
    $id = $request->getAttribute('id');               // Get book data by id
    $query = "select * from books where id=$id";
    $result = $mysqli->query($query);

    $data[] = $result->fetch_assoc();
   header('Content-type: application/json');
    echo json_encode($data); 
?>
