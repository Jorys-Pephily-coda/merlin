<?php

namespace Merlin\Component\Character\CoreFunctions;

use Merlin\Component\Console\AbstractConsoleFunction;

class UnequipFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.unequip', [
            'item'=>$args[0], 
            'body_part'=>$args[1]
        ]);
    }

    public function name() : string {
        return 'unequip';
    }

    public function description() : string {
        return 'Unequip an item from the inventory onto the body of your character';
    }

    public function getArgs() : int|array {
        return 2;
    }
}