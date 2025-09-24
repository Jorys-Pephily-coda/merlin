<?php

namespace Merlin\Interface;

interface ListenerInterface {
    public function notify(string $event, array $arguments);
    public function setPriority(int $priority);
    public function getPriority() : int;
}