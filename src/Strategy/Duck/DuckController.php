<?php

namespace App\Strategy\Duck;

use App\Strategy\Behavior\DanceBehaviorInterface;
use App\Strategy\Behavior\FlyBehaviorInterface;
use App\Strategy\Behavior\QuackBehaviorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DuckController extends AbstractController implements FlyBehaviorInterface, QuackBehaviorInterface
{
    /** @var FlyBehaviorInterface $flyBehavior */
    private $flyBehavior;

    /** @var QuackBehaviorInterface $quackBehavior */
    private $quackBehavior;

    /** @var DanceBehaviorInterface $danceBehavior */
    private $danceBehavior;

    public function display(): void
    {
    }

    public function quack(): void
    {
        $this->quackBehavior->quack();
    }

    public function fly(): void
    {
        $this->flyBehavior->fly();
    }

    public function dance(): void
    {
        $this->danceBehavior->dance();
    }

    public function swim(): void
    {
        echo 'I\'m swimming ' ;
    }

    /**
     * @param FlyBehaviorInterface $flyBehavior
     */
    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehaviorInterface $quackBehavior
     */
    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    /**
     * @param DanceBehaviorInterface $danceBehavior
     */
    public function setDanceBehavior(DanceBehaviorInterface $danceBehavior): void
    {
        $this->danceBehavior = $danceBehavior;
    }

}
