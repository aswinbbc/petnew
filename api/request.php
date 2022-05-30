<?php
include 'conn.php';

$id = $_POST['pet_id'];
$login_id = $_POST['user_id'];;

$query = mysqli_query($conn, "INSERT INTO request_tb(id,login_id) VALUES ('$id','$login_id')");
if ($query) {
    $array['msg'] = 'done';
} else {
    $array['msg'] = 'fail';
}
echo json_encode($array);
