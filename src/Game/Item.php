<?php

namespace Merlin\Game;

use Merlin\Interface\Configurable;
use Merlin\Interface\Describable;
use Merlin\Interface\Initializable;
use Merlin\Interface\Nameable;

abstract class Item implements Nameable, Describable, Initializable {

    public function initialize(): void
    {
        
    }

    abstract public function statistics() : array;
}