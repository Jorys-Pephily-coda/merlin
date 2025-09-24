<?php

namespace Merlin\Escalibur\Npcs;

use Merlin\Game\Npc;

class Chevalier extends Npc {
  public function name(): string {
    return "Chevalier";
  }

  public function description(): string {
    return "Un honnorable chevalier de la table ronde.";
  }

  public function speak(): string|array {
    return "Au nord de Camelot, près du lac, tu trouvera un puissant talisman qui te sera util dans ta quête.";
  }
}