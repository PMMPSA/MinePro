<?php

namespace Bar\Zzkino\Tasks;

use pocketmine\Server;
use pocketmine\scheduler\PluginTask;
use Bar\Zzkino\Main;
use pocketmine\plugin\Plugin;

class PanelTask extends PluginTask{

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
        parent::__construct($plugin);
    }

    public function onRun($tick){
		$this->plugin->onPanel();
    }

	public function cancel(){
      $this->getHandler()->cancel();
   }

}
