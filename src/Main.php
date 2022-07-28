<?php

declare(strict_types=1);

namespace skyss0fly\DevHealthPM4;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onLoad(): void
    {
        if ($this->debugMode === true) {
            $this->getLogger()->info(TextFormat::DARK_BLUE . "DevHealthPM4 Has Successfully loaded");
        }
    }
 public function onEnable(): void
    {

        if ($this->debugMode === true) {
            $this->getLogger()->info(TextFormat::DARK_GREEN . "Make sure to Take breaks when developing!");
        }
 private function onDisable(): void
     }
        if ($this->debugMode === true) {
            $this->getLogger()->info(TextFormat::DARK_RED . "Goodbye!!");
        }
    }
}
