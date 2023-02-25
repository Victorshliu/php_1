<!-- Card Template used to control how contained data stored in our objects are displayed -->
<div class="">
<img class="" src="images/<?php echo $tiles->image; ?>" alt="An image displaying a <?php echo $tiles->class; ?>" onclick="minMax('<?php echo $tiles->class; ?>', '<?php echo $tiles->mainStat; ?>')">
</div>
    <div class="">
        <h2><?php echo $tiles->class; ?></h2>
        <p class=""><?php echo $tiles->mainStat; ?></p>
        <p class=""><?php echo $tiles->role; ?></p>
    </div>




