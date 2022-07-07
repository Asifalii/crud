<?php
require_once('connect.php');
// error_reporting(0);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add sometding</a></button>
        <table class="table">
            <tdead>
                <tr>
                    <td scope="col">Name</td>
                    <td scope="col">Description</td>
                    <td scope="col">avilablety</td>
                    <td scope="col">Date</td>
                    <td scope="col">checked</td>
                    <td scope="col">checked</td>
                    <td scope="col">Actions</td>
                </tr>

                <?php 
                    $sql="SELECT * FROM `crud`";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name=$row['name'];
                            $Description=$row['description'];
                            $datepicker=$row['datepicker'];
                            $radio=$row['radio'];
                            $check=$row['check'];
                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$Description.'</td>
                            <td>'.$datepicker.'</td>
                            <td>'.$radio.'</td>
                            <td>'.$check.'</td>
                            <td>
                                <button class="btn btn-info"><a href="edit.php?id='.$id.'"  class="text-light" >Edit</a></button>
                                <button class="btn btn-danger"><a href="d.php?d_id='.$id.'" class="text-light">Delete</a></button>
                            </td>
                           

                        </tr>';
                        }

                    }
                ?>
            </tdead>
            <tbody>
            </tbody>
        </table>
    </div>

</body>

</html>