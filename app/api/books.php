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
?>