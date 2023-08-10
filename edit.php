<!DOCTYPE html>

<?php
include 'db.php';
$id = $_GET['id'];
$sql = "select * from tasks where Id='$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();
if (isset($_POST['send'])) {
    $task = $_POST['task'];
    $sql2 = "update tasks set Name='$task' where Id='$id'";
    $db->query($sql2);
    header("location: index.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <div class="h-50 w-50 mx-auto p-2" style="margin-top: 50px;">
            <h1 class="">To do List</h1>
            <div class="mb-3"><input type="text" name="task" value="<?php echo $row['Name'] ?>" class="form-control"></div>
            <input type="submit" name="send" value="Update Task" class="btn btn-success">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>