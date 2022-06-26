<?php
if(isset($_POST['save'])){
    require 'config.php';
    $sc = new Config();

    $sc->setFirstName($_POST['firstName']);
    $sc->setLastName($_POST['lastName']);
    $sc->setAddress($_POST['address']);

    $sc->insertData();

    echo "<script>alert('data saved successfully');document.location='index.php'</script>";

}