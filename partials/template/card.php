<!-- Card Template used to control how contained data stored in our objects are displayed -->

<div class=""><?php echo $tiles->class; ?></div>
<img class="" src="images/<?php echo $tiles->image; ?>" alt="An image displaying a <?php echo $tiles->class; ?>" onclick="minMax('<?php echo $tiles->class; ?>', '<?php echo $tiles->mainStat; ?>')">
    <div class="">
        <div class=""><?php echo $tiles->class; ?></div>
        <div class=""><?php echo $tiles->mainStat; ?></div>
        <div class=""><?php echo $tiles->role; ?></div>
    </div>




