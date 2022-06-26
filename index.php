<?php
include_once 'includes/head.php';
include_once 'includes/navbar.php';
include_once 'includes/footer.php';
?>

<div class="container text-center mt-5">
    <h1>Index</h1>
    <p>Nothing here</p>
</div>

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