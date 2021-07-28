<?php

namespace App\Strategy;

use App\Strategy\Behavior\FlyWithWingsBehaviorController;
use App\Strategy\Duck\DecoyDuckController;
use App\Strategy\Duck\DuckController;
use App\Strategy\Duck\MallardDuckController;
use App\Strategy\Duck\ModelDuckController;
use App\Strategy\Duck\RedheadDuckController;
use App\Strategy\Duck\RubberDuckController;

class DefaultController
{

    public function actionIndex(): string
    {
        $ducks = [
            'mallard' => new MallardDuckController(),
            'redhead' => new RedheadDuckController(),
            'rubber' => new RubberDuckController(),
            'decoy' => new DecoyDuckController(),
            'model' => new ModelDuckController(),
        ];

        foreach ($ducks as $duck){
            $this->playWithDuck($duck);
        }

        /** @var ModelDuckController $modelDuck*/
        $modelDuck = $ducks['model'];
        $modelDuck->setFlyBehavior(new FlyWithWingsBehaviorController());
        $this->playWithDuck($modelDuck);

        return '';
    }

    private function playWithDuck(DuckController $duck): void
    {
        $duck->display();
        $duck->quack();
        $duck->fly();
        $duck->dance();
        echo '<br>';
    }

}
