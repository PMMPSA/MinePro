<?php

namespace Bar\Zzkino;

use pocketmine\Server;
use Bar\Zzkino\Tasks\PanelTask;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use onebone\economyapi\EconomyAPI;
use pocketmine\item\Item;
use _64FF00\PurePerms\PurePerms;
use pocketmine\FactionsPro\FactionMain;

class Main extends PluginBase implements Listener {

 	
 
 	public function onEnable() {
 		$this->getServer()->getPluginManager()->registerEvents($this, $this);
 		$this->EconomyAPI = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
 		$this->PurePerms = $this->getServer()->getPluginManager()->getPlugin('PurePerms');
 		$this->FactionPro = $this->getServer()->getPluginManager()->getPlugin("FactionsPro");
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new PanelTask($this), 10);
		$this->getLogger()->info("§aĐã bật");
      @mkdir($this->getDataFolder());
      $this->saveDefaultConfig();
      $cfg = new Config($this->getDataFolder()."config.yml",Config::YAML);
     
	}
 	
	public function onPanel() {
        foreach($this->getServer()->getOnlinePlayers() as $p) {
			   $player = $p->getPlayer()->getName();
			$x = floor($p->getX());
			$y = floor($p->getY());
			$z = floor($p->getZ());
            $online = count(Server::getInstance()->getOnlinePlayers());
            $max = $this->getServer()->getMaxPlayers(); 
            $tps = $this->getServer()->getTicksPerSecond();
            $item = $p->getInventory()->getItemInHand();					
            $id = $item->getId();					
            $meta = $item->getDamage();
            $rank = $this->PurePerms->getUserDataMgr()->getGroup($p)->getName();
            $fac = $this->FactionPro->getPlayerFaction($player);
		    $money = $this->EconomyAPI->mymoney($player);
			  $t = str_repeat(" ", 75);
          $p->sendTip($t. "§l§b༒§e•°♦§c=====§d∆§c[".$this->getConfig()->get("nameserver")."§c]§d∆§c=====§e♦°•§b༒§r\n" .$t. "§l§a༺§dTên: §b" .$player."§r\n" .$t. "§l§a༺§dTrực Tuyến: §b" . $online."§f/§b".$max."§r\n" .$t. "§l§a༺§dTiền: §b".$money." Xu§r\n".$t."§l§a༺§dChức: §b".$rank."§r\n".$t."§l§a༺§dBang hội: §b".$fac."§r\n".$t."§l§a༺§dItem: §b".$id.":".$meta."§r\n".$t."§l§e•§c꧁========================꧂§e•§r".str_repeat("\n", 20));

			

// $t = str_repeat(" ", 75);
       //   $p->sendTip($t. "§c꧁§e༺".$this->getConfig()->get("ten1")."§a꧁§e༺༒༻§a꧂ ".$this->getConfig()->get("ten2")."ཽ§e༻§e꧂§r\n" .$t. "§l§a༺§dTên: §b" .$player."§r\n" .$t. "§l§a༺§dTrực Tuyến: §b" . $online."§f/§b".$max."§r\n" .$t. "§l§a༺§dTiền: §b".$money." Xu§r\n".$t."§l§a༺§dChức: §b".$rank."§r\n".$t."§l§a༺§dBang hội: §b".$fac."§r\n".$t."§l§a༺§dItem: §b".$id.":".$meta."§r\n".$t."§l§e•§c==========================§e•§r".str_repeat("\n", 20));
		}
    }

	public function onDisable() {
		$this->getLogger()->info("§4Bar closed");
	}
}//꧁༺WTཽFཽ ꧁༺༒༻꧂ NEཽTཽWཽOཽRཽKཽ ༻꧂