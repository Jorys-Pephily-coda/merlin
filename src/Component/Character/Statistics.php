<?php

namespace Merlin\Component\Character;

use LogicException;

class Statistics {

    public array $statistics = [];

    public function __construct(array $initialStats = []) {
        foreach ($initialStats as $key => $value) {
            $this->statistics[$key] = $value;
        }
    }

    public static function default() {
        return new self([
            'health' => 100,
            'chance' => 0,
            'ability' => 100,
            'wisdom' => 0,
            'defense' => 5,
        ]);
    }

    public function addDefault(string $name, int $default_value): self {
        $this->statistics[$name] = $default_value;
        return $this;
    }

    public function add(string $name, int $value): self {
        if (!$this->has($name)) $this->statistics[$name] = 0;
        $this->statistics[$name] += $value;
        return $this;
    }

    public function sub(string $name, int $value): self {
        if (!$this->has($name)) $this->statistics[$name] = 0;
        $this->statistics[$name] -= $value;
        return $this;
    }

    public function has(string $name): bool {
        return isset($this->statistics[$name]);
    }

    public function value(string $name): int {
        if (!$this->has($name)) throw new LogicException("Value for $name is not possible.");
        return $this->statistics[$name];
    }

    public function asArray(): array {
        return $this->statistics;
    }
}
