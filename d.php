<?php
require_once('connect.php');
// error_reporting(0);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0);

if(isset($_GET['d_id'])){
    $id=$_GET['d_id'];

    $sql ="DELETE FROM `crud` WHERE id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('Location:display.php');
    }

}



?>




<body>
    
</body>
</html>