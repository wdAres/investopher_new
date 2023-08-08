<?php
include 'connection.php';

$id = $_REQUEST['id'];
//execute query 
$result =  mysqli_query($conn, "select * from contact where id = $id");

$filename = "exported_data.csv";

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');


$headers = array("id", "name", "email", "phone", "options");
echo implode(',', $headers) . "\n";


while ($data = mysqli_fetch_assoc($result)) {
    echo '"' . implode('","', $data) . '"' . "\n";
}
