<?php
$json_data = $_POST['json'];
$data = json_decode($json_data);

$conn = mysqli_connect(
    'localhost',
    'duyeon',
    'endus',
    'test');


$sql = "INSERT INTO device_state (id, name, state) VALUES ('$data["id"]', '$data["name"]', '$data["state"]')";
mysqli_query($conn, $sql);
?>