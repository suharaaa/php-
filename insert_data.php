<?php
if (isset($_POST['submitted'])) {

    include('connection.php');

    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    
   
   
       $sql = "INSERT INTO people (firstn, lastn) 
               VALUES ( '$fname' , '$lname');";
       
       if (!mysqli_query($conn, $sql)) {
           die('error');
       } 
       else{
        $newrec = "1 rec added";
       }

      

}

 ?>

<html>
<head>
</head>
<body>

<form method="post" action="insert_data.php">
    <input type="hidden" name="submitted" value="true" >
    <input type="text" name="fn" placeholder="first"> <br>
    <input type="text" name="ln" placeholder="last"> <br>



    <button type="submit" value="add new person"> Sign up </button> 
</form>

<?php
    echo $newrec;
?>

</body>
</html>