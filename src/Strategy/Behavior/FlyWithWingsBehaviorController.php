<?php

namespace App\Strategy\Behavior;

/**
 * @Route("/strategy")
 */
class FlyWithWingsBehaviorController implements FlyBehaviorInterface
{

    public function fly(): void
    {
        echo 'I\'m flying with wings!! ';
    }

}
