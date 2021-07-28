<?php
requireFiles();

use App\Strategy\DefaultController;

$controller = new DefaultController();
$controller->actionIndex();


function requireFiles()
{
    require_once __DIR__ . '/../src/Strategy/Behavior/DanceBehaviorInterface.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/FlyBehaviorInterface.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/QuackBehaviorInterface.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/QuackBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/DanceMinuetBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/DanceNoWayBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/DanceWaltzBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/FlyNoWayBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/FlyWithWingsBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/MuteQuackBehaviorController.php';
    require_once __DIR__ . '/../src/Strategy/Behavior/SqueakBehaviorController.php';

    require_once __DIR__ . '/../src/Strategy/Duck/DuckController.php';
    require_once __DIR__ . '/../src/Strategy/Duck/MallardDuckController.php';
    require_once __DIR__ . '/../src/Strategy/Duck/ModelDuckController.php';
    require_once __DIR__ . '/../src/Strategy/Duck/RedheadDuckController.php';
    require_once __DIR__ . '/../src/Strategy/Duck/RubberDuckController.php';
    require_once __DIR__ . '/../src/Strategy/Duck/DecoyDuckController.php';

    require_once __DIR__ . '/../src/Strategy/DefaultController.php';
}