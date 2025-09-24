<?php

namespace Merlin\Interface;

interface Configurable {
    public function configuration(array $config);
    public function defaultConfiguration() : array;
}