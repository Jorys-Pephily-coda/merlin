<?php

namespace Merlin\Escalibur\Monsters;

use Merlin\Game\Monster;

class Dragon extends Monster {

    public function name(): string {
        return 'Dragon';
    }

    public function description(): string {
        return 'A mighty dragon with scales of fire.';
    }

    public function level(): int {
        return 20;
    }

    public function health_points(): int {
        return 300;
    }

    public function defense(): int {
        return 4;
    }

    public function attack(): int {
        return 70;
    }

    public function experience(): int {
        return 1000;
    }

    public function skills(): array {
        return [
            'Fire Breath' => 100,
            'Tail Swipe' => 60,
            'Wing Storm' => 80,
        ];
    }
}
