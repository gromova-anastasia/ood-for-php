<?php

namespace App\Strategy;

use App\Strategy\Behavior\FlyWithWingsBehaviorController;
use App\Strategy\Duck\DecoyDuckController;
use App\Strategy\Duck\DuckController;
use App\Strategy\Duck\MallardDuckController;
use App\Strategy\Duck\ModelDuckController;
use App\Strategy\Duck\RedheadDuckController;
use App\Strategy\Duck\RubberDuckController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/strategy")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="strategy:index")
     */
    public function index(): Response
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

        return new Response('');
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
