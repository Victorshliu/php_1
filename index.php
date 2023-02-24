<?php 

    require(__DIR__ . '/init.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php require('partials/global/head.php'); ?>
<body>

    <?php require('partials/global/header.php'); ?>

    <div>



    <?php foreach($player as $tiles): ?>
        <div>
            <?php include('partials/template/card.php'); ?>
        </div>
    <?php endforeach; ?>

</body>

</html>