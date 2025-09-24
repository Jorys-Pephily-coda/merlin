<?php

namespace Merlin\Interface;

use Merlin\Game\Position\Position;

interface Positionnable {
    public function position() : Position;
}