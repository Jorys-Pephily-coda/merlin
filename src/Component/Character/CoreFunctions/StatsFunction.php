<?php

namespace Merlin\Component\Character\CoreFunctions;

use Merlin\Component\Console\AbstractConsoleFunction;

class StatsFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.stats', ['type'=> $args[0], 'stat'=> $args[1]]);
    }

    public function name() : string {
        return 'stats';
    }

    public function description() : string {
        return 'Manage your stats';
    }

    public function getArgs() : int|array {
        return 2;
    }
}