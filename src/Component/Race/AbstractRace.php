<?php

namespace Merlin\Component\Race;

use Merlin\Component\Character\Statistics;
use Merlin\Interface\Describable;
use Merlin\Interface\Nameable;

abstract class AbstractRace implements Nameable, Describable{
    abstract public function statistics() : Statistics;
}