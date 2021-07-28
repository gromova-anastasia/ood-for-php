<?php

namespace App\Strategy\Behavior;

class DanceWaltzBehaviorController implements DanceBehaviorInterface
{

    public function dance(): void
    {
        echo 'I\'m dancing waltz! ';
    }

}
