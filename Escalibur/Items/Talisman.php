<?php

namespace Merlin\Escalibur\Items;

use Merlin\Game\Item_Equippable;

class Talisman extends Item_Equippable {
  public function name(): string {
    return "Talisman";
  }

  public function description(): string {
    return "Le talisman de la dame du lac.";
  }

  public function body_part(): string {
    return "head";
  }

  public function statistics(): array {
    return ["defense" => 10,"wisdom" => 5];
  }
}