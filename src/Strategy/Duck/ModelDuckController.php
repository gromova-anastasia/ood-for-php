<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\FlyNoWayBehaviorController;
use App\Strategy\Behavior\QuackBehaviorController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/strategy")
 */
class ModelDuckController extends DuckController
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWayBehaviorController());
        $this->setQuackBehavior(new QuackBehaviorController());
    }

    public function display(): void
    {
        echo '<b>I\'m model duck</b> ' ;
    }

    public function dance(): void
    {
    }

}
