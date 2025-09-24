<?php

namespace Merlin\Component\Race;

use Merlin\Component\Character\Statistics;

class Magus extends AbstractRace {

    public function statistics(): Statistics { 
        return (new Statistics())
            ->addDefault('Healt', 100)
            ->addDefault('Force', 3)
            ->addDefault('Defense', 3)
        ;
    }

    public function name(): string { 
        return 'Magus';
    }

    public function description(): string { 
        return 'Magus race that grow on zarc';
    }

}