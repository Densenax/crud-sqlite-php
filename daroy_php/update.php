<!DOCTYPE html>
<html lang="en">
<head>
  <title>Updating User Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php

include('conndb.php');

$id = $_GET['u_id'];

$query = "SELECT * FROM user_table WHERE user_id='$id'";
$res = $db->query($query);

?>
    <div class="container">
        <div class="row" style="margin: top 10px; margin: bottom 10;">
            <div class="col-md-9">

                <br><br>
                <div class="container">
                    <h2>Update Existing User Information</h2>
                    <form action="edit.php" method="post">

                    <?php

                    while($row = $res->fetchArray()){

                    ?>
                        <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="user_email" value="<?php echo $row['user_email']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Details:</label>
                            <textarea class="form-control" name="user_details"><?php echo $row['user_details']; ?></textarea>

                        <?php
                            }
                        ?>

                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>        
    </div>
</body>
</html>