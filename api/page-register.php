<?php
include 'conn.php';
$filenew = "";

$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$adhar = $_POST['aadhar'];
$user = $_POST['username'];
$pass = $_POST['password'];
// $pic=$_FILES['f1']['name'];

//  if($pic!="") 
//  {
// 	  $filearray=pathinfo($_FILES['f1']['name']);
// 	  $file1=rand();
// 	  $file_ext=$filearray["extension"];

// 	    $filenew=$file1.".".$file_ext;

// 	   move_uploaded_file($_FILES['f1']['tmp_name'],"images/gallery/".$filenew);

//   }


$query = mysqli_query($conn, "INSERT INTO login_tb(username,password,type) VALUES ('$user','$pass','vendor')");
$id = mysqli_insert_id($conn);

$query1 = mysqli_query($conn, "INSERT INTO register_tb(login_id,name,address,mobile,email,adhar,license,username,password)VALUES('$id','$name','$address','$mobile','$email','$adhar','user.jpg','$user','$pass')");
$query2 = mysqli_query($conn, "SELECT *  FROM login_tb where username='$user' AND password='$pass'");

if ($query && $query1 && $query2) {
	$array['msg'] = 'done';
} else {
	$array['msg'] = 'fail';
}
echo json_encode($array);
