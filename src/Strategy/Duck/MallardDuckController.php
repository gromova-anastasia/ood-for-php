<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\FlyWithWingsBehaviorController;
use App\Strategy\Behavior\QuackBehaviorController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/strategy")
 */
class MallardDuckController extends DuckController
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWingsBehaviorController());
        $this->setQuackBehavior(new QuackBehaviorController());
    }

    public function display(): void
    {
        echo '<b>I\'m mallard duck</b> ' ;
    }

}
