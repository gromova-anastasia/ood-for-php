<?php

namespace App\Strategy\Behavior;

class QuackBehaviorController implements QuackBehaviorInterface
{

    public function quack(): void
    {
        echo 'Quack Quack!!! ';
    }

}
