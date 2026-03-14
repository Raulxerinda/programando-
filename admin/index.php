<?php include_once './config/config.php';?>

<?php

if(!isset($_SESSION['userLogged'])){
header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include_once './partes/head.php'; ?>

<body>
    <?php include_once './pages/home.php'; ?>


<?php include_once './partes/script.php'; ?>

</body>
</html>