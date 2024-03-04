<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <?php
        include ('conndb.php');

        $query = "SELECT * FROM user_table";

        $result = $db->query($query);
    ?>
    <div class="row" style="margin: top 10px; ">
        <div class="col-md-9">

            <br><br>
            <div class="container">
                <h2>Add New User</h2>
                <form action="insert.php" method="post">

                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" placeholder="Enter Username" name="user_name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="user_email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label>Details:</label>
                        <textarea class="form-control" name="user_details"></textarea>
                    </div>


                    <input type="submit" name="insert-btn" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm">
        <br><br><br>
        <h4>User Details</h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <th>Username</th>
                <th>Email</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>

            <?php
            while($row = $result->fetchArray()){
            
            ?>

            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['user_email']; ?></td>
                <td><?php echo $row['user_details']; ?></td>
                <td>
                    <a href="update.php?u_id=<?php echo $row['user_id']; ?>" class="btn btn-info" role="button">Update</a>
                    <a href="delete.php?u_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" role="button">Delete</a>

                </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <br><br><br>
</div>

</body>
</html>