<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\DanceNoWayBehaviorController;
use App\Strategy\Behavior\FlyNoWayBehaviorController;
use App\Strategy\Behavior\SqueakBehaviorController;

class RubberDuckController extends DuckController
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWayBehaviorController());
        $this->setQuackBehavior(new SqueakBehaviorController());
        $this->setDanceBehavior(new DanceNoWayBehaviorController());
    }

    public function display(): void
    {
        echo '<b>I\'m rubber duck</b> ' ;
    }

}
