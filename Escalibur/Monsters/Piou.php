<?php

namespace Merlin\Escalibur\Monsters;

use Merlin\Game\Monster;

class Piou extends Monster {
    public function name(): string {
        return 'Piou';
    }

    public function description(): string {
        return 'A small, colorful bird. Weak, but quick.';
    }

    public function level(): int {
        return 1;
    }

    public function health_points(): int {
        return 10;
    }

    public function defense(): int {
        return 1;
    }

    public function attack(): int {
        return 3;
    }

    public function experience(): int {
        return 5;
    }

    public function skills(): array {
        return [
            'Peck' => 10,
        ];
    }
}