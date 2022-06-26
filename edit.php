<?php
require 'start.php';
include_once 'includes/head.php';
include_once 'includes/navbar.php';
include_once 'includes/footer.php';

$data = new Config();
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['edit'])){
    $data->setFirstName($_POST['firstName']);
    $data->setLastName($_POST['lastName']);
    $data->setAddress($_POST['address']);

    echo $data->update();

    echo "<script>alert('data updated successfully');document.location='index.php?list-users'</script>";
}
$all = $data->fetchAll();


?>


    <div class="container text-center mt-3">
        <h1>Edit User</h1>
        <form class="mt-5 d-flex" method="post">
        <input class="form-control col-md-4" type="text" name="firstName" placeholder="firstname">
        <input class="form-control col-md-4" type="text" name="lastName" placeholder="lastname">
        <input class="form-control col-md-4" type="text" name="address" placeholder="address">
        <input class="btn btn-primary" type="submit" name="edit" value="Save">

        </form>
    </div>

    <script src="library/bootstrap/js/bootstrap.js"></script>
</body>
</html>