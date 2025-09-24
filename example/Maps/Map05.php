<?php

namespace Merlin\Example\Maps;

use Merlin\Component\Map\Blueprint;
use Merlin\Example\Items\Shield;
use Merlin\Example\Monsters\Bouftou;
use Merlin\Game\Position\Position;

class Map05 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,1);
    }

    public function name() : string {
        return 'Map 6';
    }

    public function description() : string {
        return 'Oh ! This is so flat !';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [new Shield()];
    }

    public function monsters() : array {
        return [new Bouftou()];
    }
}