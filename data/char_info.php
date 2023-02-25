<?php
// partial file to hold object data in one easy to manage file

// Template to copy and paste from
// $= new PlayerClass([
//     "class" => "",
//     "image" => ".png",
//     "role" => "Damage Dealer + Control",
//     "mainStat" => "Dexterity",
// ]);

// property data
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

$wizard= new PlayerClass([
    "class" => "Wizard",
    "image" => "wizard.png",
    "role" => "Damage Dealer + Control",
    "mainStat" => "Dexterity",
]);

// Array used to store and create access point to stored information
$player = [
    $barbarian, $bard, $rogue, $cleric, $monk, $wizard
];