<?php

namespace Merlin\Escalibur\Items;

use Merlin\Game\Item_Equippable;

class Graal extends Item_Equippable {
  public function name(): string {
    return "Graal";
  }

  public function description(): string {
    return "Le légendaire Graal.";
  }

  public function body_part(): string {
    return "hand";
  }

  public function statistics(): array {
    return ["wisdom" => 100];
  }
}