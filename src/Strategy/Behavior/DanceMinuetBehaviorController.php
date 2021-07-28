<?php

namespace App\Strategy\Behavior;


class DanceMinuetBehaviorController implements DanceBehaviorInterface
{

    public function dance(): void
    {
        echo 'I\'m dancing minuet! ';
    }

}
