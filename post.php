<?php
$json_data = $_POST['json'];
$data = json_decode($json_data);

$conn = mysqli_connect(
    'localhost',
    'duyeon',
    'endus',
    'test');

$id = $data["id"];
$name = $data["name"];
$state = $data["state"];

$sql = "INSERT INTO device_state (id, name, state) VALUES ('$state', '$name', '$state')";
mysqli_query($conn, $sql);
?>