<?php
include_once 'includes/head.php';
include_once 'includes/navbar.php';
include_once 'includes/footer.php';
?>

    <div class="container text-center mt-3">
        <h1>New User</h1>
        <form class="mt-5 d-flex" action="formProcess.php" method="post">

        <input class="form-control col-md-4" type="text" name="firstName" placeholder="firstname">
        <input class="form-control col-md-4" type="text" name="lastName" placeholder="lastname">
        <input class="form-control col-md-4" type="text" name="address" placeholder="address">

        <input class="btn btn-primary" type="submit" name="save" value="Save">

        </form>
    </div>

    <script src="library/bootstrap/js/bootstrap.js"></script>
</body>
</html>