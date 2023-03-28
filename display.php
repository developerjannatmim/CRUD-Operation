<?php

include("connect.php");
$objCrudAdmin = new crudOperation();

$users = $objCrudAdmin->display_data();

if (isset($_GET['status'])) {
    if ($_GET['status'] == "delete") {
        $del_id = $_GET['id'];
        $del_data = $objCrudAdmin->delete_data($del_id);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>

        <table class="table table-dark table-striped">
            <thead>

                <tr>
                    <th scope="col">SI no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = mysqli_fetch_assoc($users)) { ?>
                    <tr>
                        <th scope="row"><?php echo $user['id'] ?></th>
                        <td><?php echo $user['user_name'] ?></td>
                        <td><?php echo $user['user_email'] ?></td>
                        <td><?php echo $user['user_phone'] ?></td>
                        <td><?php echo $user['user_password'] ?></td>
                        <td>
                            <a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $user['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="?status=delete&&id=<?php echo $user['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>