<?php
include('conn.php');
$query = mysqli_query($conn, "SELECT * FROM pet_tb");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $array['id'] = $row['id'];
    $array['name'] = $row['owner_name'];
    $array['mobile'] = $row['mobile'];
    $array['address'] = $row['address'];
    $array['image'] = $row['image'];
    $array['category'] = $row['category'];
    $array['breed'] = $row['breed'];
    $array['age'] = $row['age'];
    $array['sex'] = $row['sex'];
    $array['color'] = $row['colour'];
    $array['title'] = $row['title'];
    $array['info'] = $row['information'];
    $array['price'] = $row['price'];
    array_push($data, $array);
}
echo json_encode($data);
