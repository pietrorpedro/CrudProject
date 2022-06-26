<?php
require 'start.php';
include_once 'includes/head.php';
include_once 'includes/navbar.php';
include_once 'includes/footer.php';

$data = new Config();
$all = $data->fetchAll();
?>

<body>

    <div class="container">
        <table class="table table-striped mt-5 text-center">
            <tr>
                <th>#</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Address</th>
                <th>Action</th>
            </tr>

            <?php
                foreach($all as $key => $val){ //Abre chaves aqui
            ?>
            
            <tr>
                <td><?php echo $val['id'];?></td>
                <td><?php echo $val['firstName'];?></td>
                <td><?php echo $val['lastName'];?></td>
                <td><?php echo $val['address'];?></td>
                <td><a class="btn btn-danger" href="delete.php?id=<?= $val['id'] ?>&req=delete">Delete</a> <a class="btn btn-warning" href="edit.php?id=<?= $val['id'] ?>">Edit</a></td>
                
                
            </tr>
            <?php } //E fecha aqui ?>
        </table>
    </div>

    <script src="library/bootstrap/js/bootstrap.js"></script>
</body>
</html>