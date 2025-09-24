<?php

namespace Merlin\Interface;

interface Fightable {
    public function getLife() : int;
    public function getAttack() : int;
    public function getDefense() : int;
}