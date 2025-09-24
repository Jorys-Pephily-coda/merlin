<?php

namespace Merlin\Component\Character\CoreFunctions;

use Merlin\Component\Console\AbstractConsoleFunction;

class FightFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.fight', ['monster' => $args[0]]);
    }

    public function name() : string {
        return 'fight';
    }

    public function description() : string {
        return 'Command used to fight a monster on a map';
    }

    public function getArgs() : int|array {
        return 1;
    }
}