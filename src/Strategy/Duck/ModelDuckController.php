<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\DanceNoWayBehaviorController;
use App\Strategy\Behavior\FlyNoWayBehaviorController;
use App\Strategy\Behavior\QuackBehaviorController;

class ModelDuckController extends DuckController
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWayBehaviorController());
        $this->setQuackBehavior(new QuackBehaviorController());
        $this->setDanceBehavior(new DanceNoWayBehaviorController());
    }

    public function display(): void
    {
        echo '<b>I\'m model duck</b> ' ;
    }

}
