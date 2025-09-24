<?php

namespace Merlin\Escalibur\Npcs;

use Merlin\Game\Npc;
use Merlin\Escalibur\Items\Talisman;

class Pretre extends Npc {
  public function name(): string {
    return "Prêtre";
  }

  public function description(): string {
    return "Un homme de fois.";
  }

  public function speak(): string|array {
    return "Ne te rend pas au delà du lac au nord de Camelot.";
  }
}