<?php

namespace Merlin\Component\Race;

use Merlin\Component\AbstractComponent;
use Merlin\Component\Character\Statistics;
use Merlin\Component\PrettyPrinter\PrettyPrinter;
use LogicException;

class Race extends AbstractComponent {

    private $chosen_race = null;

    final public function name() : string {
        return 'race';
    }

    final public function getEventName() : array {
        return ['race.view', 'race.ask'];
    }

    final public function require() : array {
        return [PrettyPrinter::class];
    }

    final public function initialize() : void {
        if(empty($this->config['races'])) {
            throw new LogicException('You should add races if this component is register.');
        }

        foreach($this->config['races'] as $race) {
            if(!is_subclass_of($race, AbstractRace::class)) {
                throw new LogicException('The class ' . $race . ' should be a subclass of AbstractRace');
            }
        }
    }

    final protected function action(string $event, array $arguments) : void {
        switch($event) {
            case 'race.ask':
                $this->ask();
                break;
            case 'race.view':
                $this->view();
                break;
            default:
                $this->eventToAction($event);
        }
    }

    private function view() {
        $pp = $this->container->getPrettyPrinter();
        if($this->chosen_race !== null){
            $pp->writeLn('Race : ' . $this->chosen_race->description());
        }
    }

    private function ask() {
        $pp = $this->container->getPrettyPrinter();
        $print_race = [];
        foreach($this->config['races'] as $raceName => $race) {
            $print_race[] = [$raceName, $race->description()];
        }

        $pp->writeTable(
            ['Name', 'Description'],
            $print_race
        );

        while($this->chosen_race === null) {
            $choice = readline('Race name >> ');
            if(isset($this->config['races'][$choice])) {
                $this->chosen_race = $this->config['races'][$choice];
                $this->container->getComponent('character')->config['race'] = $choice;
                $pp->writeLn('Race ' . $choice . ' chosen', 'green');
            }
        }
    }

    final public function defaultConfiguration() : array {
        return [
            'races'=>[
                'Human' => new Human(),
                'Magus' => new Magus(),
                'Troll' => new Troll()
            ]
        ];
    }
}
