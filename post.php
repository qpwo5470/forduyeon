<?php
$json_data = $_POST['json'];
$data = json_decode($json_data, true);

$conn = mysqli_connect(
    'localhost',
    'duyeon',
    'endus',
    'test');

$id = $data["id"];
$name = $data["name"];
$state = $data["state"];

$sql = "INSERT INTO device_state(id, name, state) VALUES ('$id', '$name', '$state')";
$result = mysqli_query($conn, $sql);
echo $result;

mysqli_close($conn);
?>