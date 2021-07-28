<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\DanceMinuetBehaviorController;
use App\Strategy\Behavior\FlyWithWingsBehaviorController;
use App\Strategy\Behavior\QuackBehaviorController;

class RedheadDuckController extends DuckController
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWingsBehaviorController());
        $this->setQuackBehavior(new QuackBehaviorController());
        $this->setDanceBehavior(new DanceMinuetBehaviorController());
    }

    public function display(): void
    {
        echo '<b>I\'m redhead duck</b> ' ;
    }

}
