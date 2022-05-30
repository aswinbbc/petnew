<?php
include 'conn.php';

    $id=$_POST['login_id'];
    $title=$_POST['title'];
    $chat=$_POST['chat'];
    $date=$_POST['date'];
    
    $query=mysqli_query($conn,"INSERT INTO chat_womencell_tb(login_id,discussion_title,chat,discussion_date) VALUES ('$id','$title','$chat','$date')");
    
    if($query)
    {
        echo 'true';
    }
    else
    {
        echo 'false';
    }
?>