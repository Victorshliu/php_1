<?php
// partial file to hold object data in one easy to manage file

// Template to copy and paste from
// $temp = new PlayerClass();
// $temp -> class = "";
// $temp -> image= "";
// $temp -> role = "";
// $temp -> mainStat = "";

// Barbarian
$barbarian = new PlayerClass([
    "class" => "Barbarian",
    "image" => "barbarian.png",
    "role" => "Damage Dealer + Tank",
    "mainStat" => "Strength"
]);


$bard= new PlayerClass([
    "class" => "Bard",
    "image" => "bard.png",
    "role" => "Support + Control",
    "mainStat" => "Charisma",
]);

$rogue= new PlayerClass([
    "class" => "Rogue",
    "image" => "rogue.png",
    "role" => "Damage Dealer + Utility",
    "mainStat" => "Dexterity",
]); 

$cleric= new PlayerClass([
    "class" => "Cleric",
    "image" => "cleric.png",
    "role" => "Healer + Support",
    "mainStat" => "Wisdom",
]); 

$monk= new PlayerClass([
    "class" => "Monk",
    "image" => "monk.png",
    "role" => "Damage Dealer + Control",
    "mainStat" => "Dexterity",
]); 



// Array used to store and create access point to stored information
$player = [
    $barbarian, $bard, $rogue, $cleric, $monk
];