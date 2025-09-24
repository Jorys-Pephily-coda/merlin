<?php

namespace Merlin\Component\Character\CoreFunctions;

use Merlin\Component\Console\AbstractConsoleFunction;

class MainCharacterFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.me', $args);
    }

    public function name() : string {
        return 'me';
    }

    public function description() : string {
        return 'Print character stats';
    }

    public function getArgs() : int|array {
        return 0;
    }
}