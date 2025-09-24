<?php

namespace Merlin\Component\Inventory\CoreFunctions;

use Merlin\Component\Console\AbstractConsoleFunction;

class DropFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('inventory.drop', ['item_name'=>$args[0]]);   
    }

    public function name() : string {
        return 'drop';
    }

    public function description() : string {
        return 'Drop an item from your inventory';
    }

    public function getArgs() : int|array {
        return 1;
    }
}