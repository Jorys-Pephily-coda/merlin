<?php

namespace Merlin\Escalibur\Items;

use Merlin\Game\Item_Equippable;

class Grimoire extends Item_Equippable {
  public function name(): string {
    return "Grimoire";
  }

  public function description(): string {
    return "Un vieux livre infusé de pouvoir magique";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array {
    return ["ability" => 10];
  }
}