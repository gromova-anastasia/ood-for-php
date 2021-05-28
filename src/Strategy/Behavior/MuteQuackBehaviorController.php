<?php

namespace App\Strategy\Behavior;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/strategy")
 */
class MuteQuackBehaviorController extends AbstractController implements QuackBehaviorInterface
{

    public function quack(): void
    {
    }

}
