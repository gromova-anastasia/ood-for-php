<?php

namespace App\Strategy\Behavior;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/strategy")
 */
class DanceWaltzBehaviorController extends AbstractController implements DanceBehaviorInterface
{

    public function dance(): void
    {
        echo 'I\'m dancing waltz! ';
    }

}
