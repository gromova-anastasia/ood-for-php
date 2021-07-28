<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\DanceNoWayBehaviorController;
use App\Strategy\Behavior\FlyNoWayBehaviorController;
use App\Strategy\Behavior\MuteQuackBehaviorController;

class DecoyDuckController extends DuckController
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWayBehaviorController());
        $this->setQuackBehavior(new MuteQuackBehaviorController());
        $this->setDanceBehavior(new DanceNoWayBehaviorController());
    }

    public function display(): void
    {
        echo '<b>I\'m decoy duck</b> ' ;
    }

}
