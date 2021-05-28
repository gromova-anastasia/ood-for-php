<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\DanceNoWayBehaviorController;
use App\Strategy\Behavior\FlyNoWayBehaviorController;
use App\Strategy\Behavior\MuteQuackBehaviorController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/strategy")
 */
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
