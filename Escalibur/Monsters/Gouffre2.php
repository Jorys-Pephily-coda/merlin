<?php

namespace Merlin\Escalibur\Monsters;

use Merlin\Game\Monster;

class Gouffre2 extends Monster {

    public function name() : string {
        return 'Gouffre';
    }

    public function description(): string { 
        return "L'âme du gouffre";
    }

    public function level() : int {
        return 1000;
    }

    public function health_points(): int { 
        return 1000;
    }

    public function defense(): int { 
        return 1000;
    }

    public function attack() : int {
        return 1000;
    }

    public function experience(): int { 
        return 0;
    }

    public function skills(): array { 
        return [
            'Chute' => 1000,
        ];
    }
}