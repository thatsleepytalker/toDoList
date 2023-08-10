<!DOCTYPE html>

<?php
include 'db.php';
$sql = "select * from tasks";
$rows = $db->query($sql);
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do-List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row" style="margin-top: 70px;">
      <h1>Todo List</h1>
      <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-success">Add Task</button>
      <button type="button" class="btn btn-default">Print</button>
      <hr><br>

      <div id="addModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Task</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="add.php">
                <div class="mb-3"><input type="text" name="task" class="form-control"></div>
                <input type="submit" name="send" value="Add Task" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-10 col-md-offset-1">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Task</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $rows->fetch_assoc()) : ?>
              <tr>
                <th scope="row"><?php echo $row['Id']; ?></th>
                <td class='col-md-10'><?php echo $row['Name']; ?></td>
                <td><a class='btn btn-success' href="edit.php?id=<?php echo $row['Id']; ?>">Edit</a></td>
                <td><a class='btn btn-danger' href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>