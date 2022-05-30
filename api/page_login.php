<?php
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];;

$query = mysqli_query($conn, "SELECT * FROM login_tb where username='$username' AND password='$password' AND status='1'");

if (mysqli_num_rows($query) > 0) {
  $row_data = mysqli_fetch_assoc($query);
  $response['message'] = true;
  $response['id'] = $row_data['login_id'];
  $response['role'] = $row_data['type'];
} else {
  $response['message'] = 'false';
}
echo json_encode($response);
