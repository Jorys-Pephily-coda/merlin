<?php

namespace Merlin\Component\Race;

use Merlin\Component\Character\Statistics;

class Troll extends AbstractRace {

    public function statistics(): Statistics { 
        return (new Statistics())
            ->addDefault('Healt', 300)
            ->addDefault('Force', 6)
            ->addDefault('Defense', 6)
        ;
    }

    public function name(): string { 
        return 'Troll';
    }

    public function description(): string { 
        return 'Troll race that grow on Trollum';
    }

}