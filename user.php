<?php

include("connect.php");
$objCrudAdmin = new crudOperation();



if (isset($_POST['user_info'])) {
    $return_msg = $objCrudAdmin->add_data($_POST);
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
</head>

<body>

    <div class="container my-4 p-4 shadow">
        <form class="form" method="post">
            <?php if (isset($return_msg)) {
                echo $return_msg;
            } ?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control mb-2" placeholder="enter your name" name="name" />
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control mb-2" placeholder="enter your email" name="email" />
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" class="form-control mb-2" placeholder="enter your mobile number" name="mobile" />
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control mb-2" placeholder="enter your password" name="password" />
            </div>
            <button type="submit" name="user_info" class="btn btn-primary">Submit</button>
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