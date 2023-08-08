<?php
include 'connection.php';

$result =  mysqli_query($conn, "select * from contact ORDER BY id DESC");

$filename = "exported_data.csv";

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$headers = array("id", "name", "email", "phone", "options"); // Adjust this to your actual column names
echo implode(',', $headers) . "\n";


while ($data = mysqli_fetch_assoc($result)) {
    echo '"' . implode('","', $data) . '"' . "\n";
}
