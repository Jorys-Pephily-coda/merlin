<?php

namespace Merlin\Game;

use Merlin\Container;
use Merlin\Interface\Containerable;
use Merlin\Interface\Describable;
use Merlin\Interface\Fightable;
use Merlin\Interface\Nameable;

abstract class Monster implements Containerable, Describable {

    protected Container $container;

    final public function setContainer(Container $container) : void {
        $this->container = $container;
    }

    abstract function level() : int;
    abstract function health_points() : int;
    abstract function defense() : int;
    abstract function attack() : int;
    abstract function experience() : int;
    abstract function skills() : array;
}