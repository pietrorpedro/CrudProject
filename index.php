<?php
include_once 'includes/head.php';
include_once 'includes/navbar.php';
include_once 'includes/footer.php';
?>


<?php
switch (key($_GET)){
    case 'new-user':
        require 'form.php';
    break;

    case 'list-users':
        require 'list-users.php';
    break;
}
?>
<script src="library/bootstrap/js/bootstrap.js"></script>