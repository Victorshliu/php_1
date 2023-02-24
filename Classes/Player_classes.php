<?php   

// Establish class blueprint and associate properties to the class

class PlayerClass {
    // Variables/Properties that are available to the objects created from the class
    public $class;
    public $image;
    public $role;
    public $mainStat;
 
    // the __construct function will give the newly created objects the associated properties

    public function __construct($player = []) {
        // $this will refer to the current object
        // "class" refers to the property
        $this->class = $player['class'];
        $this->image = $player['image'];
        $this->role = $player['role'];
        $this->mainStat = $player['mainStat'];
    }

    public function minMax() {
        echo "If playing the " . $this->class . " and you do not have a high " . $this->mainStat . "YOU ARENT OPTIMAL";
    }
    
};