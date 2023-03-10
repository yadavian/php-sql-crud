<?php
include('connect.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `tbl_users` WHERE id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `tbl_users` SET `id`='$id',`name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo 'Date Inserted';
        header('location:user.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD USER </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <button class="btn btn-primary my-5">
                <a href='user.php' class="text-light"> User</a>
            </button>
            <form method='post' class='mt-5'>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name"
                        value="<?php echo $name ?>" autocomplete="off" />
                </div>
                <div class="form-group mt-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email" name='email'
                        value="<?php echo $email ?>" autocomplete="off">
                </div>
                <div class="form-group mt-3">
                    <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter phone" name='mobile'
                        value="<?php echo $mobile ?>" autocomplete="off">
                </div>
                <div class="form-group mt-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" value="<?php echo $password ?>"
                        name='password' autocomplete="off">
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>