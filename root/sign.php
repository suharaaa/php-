<?php
 include_once 'conn_w_db.php';

 $subject = $_POST['subject'];
 $tpno = $_POST['tpno'];
 $pwd = $_POST['pwd'];
 $date = $_POST['date'];


    $sql = "INSERT INTO posts (subject,contact, content, date) 
            VALUES ( '$subject' ,  '$tpno' , '$pwd' , '$date' )";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    

    header("Loaction: /insert_data.php?signup=success");
    
?>