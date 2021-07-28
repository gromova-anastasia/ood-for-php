<?php

namespace App\Strategy\Behavior;

/**
 * @Route("/strategy")
 */
class SqueakBehaviorController implements QuackBehaviorInterface
{

    public function quack(): void
    {
        echo 'Squeek!!! ';
    }

}
