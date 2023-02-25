<?php 

    require(__DIR__ . '/init.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php require('partials/global/head.php'); ?>
<body>

    <?php require('partials/global/header.php'); ?>
   
    <div class="container ig"> 
            <?php foreach($player as $tiles): ?>
                <div class="card">
                    <?php include('partials/template/card.php'); ?>
                </div>
            <?php endforeach; ?>
    </div>
    <?php require('partials/global/footer.php'); ?>
</body>
<script src="/script.js"></script> 
</html>