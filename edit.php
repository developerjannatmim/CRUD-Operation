<?php

include("connect.php");
$objCrudAdmin = new crudOperation();


if (isset($_GET['status'])) {
    if ($_GET['status'] = "edit") {
        $id = $_GET['id'];
        $returnData = $objCrudAdmin->display_data_by_id($id);
    }
}

if (isset($_POST['u_user_info'])) {
    $update_data = $objCrudAdmin->update_data($_POST);
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>CRUD Operation</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="container my-4 p-4 shadow">
        <h1><a href="display.php" class="title">All Users Information</a></h1>
        <form class="form" method="post">
            <?php if (isset($update_data)) {
                echo $update_data;
            } ?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control mb-2" name="u_user_name" value="<?php echo $returnData['user_name']; ?>" />
                <input type="hidden" name="user_id" value="<?php echo $returnData['id']; ?>" />
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control mb-2" name="u_user_email" value="<?php echo $returnData['user_email']; ?>" />
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" class="form-control mb-2" name="u_user_mobile" value="<?php echo $returnData['user_phone']; ?>" />
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control mb-2" name="u_user_password" value="<?php echo $returnData['user_password']; ?>" />
            </div>
            <button type="submit" name="u_user_info" class="btn btn-primary">Update Information</button>
        </form>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>