<?php
$id = $_POST['id'];
$name = $_POST['name'];
$state = $_POST['state'];
//$data = json_decode($json_data);

$conn = mysqli_connect(
    'localhost',
    'duyeon',
    'endus',
    'test');

$sql = "INSERT INTO device_state(id, name, state) VALUES ('$id', '$name', '$state')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>