<?php
require_once('connect.php');
// error_reporting(0);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 0);
?>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['des'];
    $datepicker=$_POST['date'];
    $radio=$_POST['radio'];
    $check=$_POST['box'];

    $sql="INSERT INTO `crud` (`name`, `description`, `datepicker`, `radio`, `check`) VALUES ('$name', '$description', '$datepicker', '$radio', '$check')";
    $result=mysqli_query($conn,$sql);

    // var_dump($sql);
    // die;
    if($result){
    //    echo "inserted";
    header('Location: display.php');
    }else{
        echo "ithe";
        // die(mysqli_errno($conn));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<body>
    <div class="container my-5">

        <form method="POST">
        <button type="submit"class="btn btn-primary"><a href="display.php" class="text-light">View List</a></button>
            <div class="mb-3">
                <labelclass="form-label">Name</labelclass=>
                    <input type="text" class="form-control" name="name" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <labelclass="form-label">Description</labelclass=>
                    <input type="text" class="form-control" name="des" autocomplete="off">
            </div>

            <div class="mb-3">
                <labelclass="form-label">Date</labelclass=>
                    <input type="date" class="form-control" name="date" autocomplete="off">
            </div>

            <div class="mb-3">
                <input type="radio" name="radio" value=1 autocomplete="off">
                <label>HTML</label><br>
            </div>
            <div class="mb-3">
                <input type="checkbox" name="box" value=1 autocomplete="off">
                <label> Agree</label><br>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

</body>

</html>