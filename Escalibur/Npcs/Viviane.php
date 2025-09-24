<?php

namespace Merlin\Escalibur\Npcs;

use Merlin\Game\Npc;
use Merlin\Escalibur\Items\Talisman;

class Viviane extends Npc {
  public function name(): string {
    return "Viviane";
  }

  public function description(): string {
    return "La dame du lac.";
  }

  public function speak(): string|array {
    if ($this->playerHasItem("Talisman")) {
      return "Ce talisman te protegera durant ton aventure.";
    }
    $this->giveItem(new Talisman());
    return "Tiens, prends ce talisman magique.";
  }
}