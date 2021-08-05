<?php
$json_data = $_POST['json'];
$data = json_decode($json_data);

//$conn = mysqli_connect(
//    'localhost',
//    'duyeon',
//    'endus',
//    'test');
//
echo $json_data;
echo $data;
//$id = $data["id"];
//$name = $data["name"];
//$state = $data["state"];
//
//$sql = "INSERT INTO device_state(id, name, state) VALUES ('$id', '$name', '$state')";
//mysqli_query($conn, $sql);
//
//mysqli_close($conn);
?>