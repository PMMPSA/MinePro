<?php

namespace oplogin;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as Color;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {
  
  private $logged;
   
   public function onEnable() {
   if(!is_dir($this->getDataFolder())) {
     mkdir($this->getDataFolder());
     }
     $this->cfg = (new Config($this->getDataFolder() . "config.yml", Config::YAML, [
      "password" => "MinePro@123456789"
      ]));
      
     $this->getServer()->getPluginManager()->registerEvents($this,$this);
     }
     
     public function onPlace(BlockPlaceEvent $ev) {
       if($ev->getPlayer()->isOp()) {
       
        if($this->logged[$ev->getPlayer()->getName()] == false) {
          $ev->setCancelled(true);
          $ev->getPlayer()->sendMessage(Color::RED ."§c§l•§b Bạn cần đăng nhập mật khẩu OP§c•\n§b♦Cú Pháp: §a/dnop [mật khẩu]");
          }
         }
        }
        
      public function onBreak(BlockBreakEvent $ev) {
        if($ev->getPlayer()->isOp()) {
       
        if($this->logged[$ev->getPlayer()->getName()] == false) {
          $ev->setCancelled(true);
          $ev->getPlayer()->sendMessage(Color::RED ."§c§l•§b Bạn cần đăng nhập mật khẩu OP§c•\n§b♦Cú Pháp: §a/dnop [mật khẩu]");
          }
         }
        }
        
        public function onInteract(PlayerInteractEvent $ev) {
        if($ev->getPlayer()->isOp()) {
       
        if($this->logged[$ev->getPlayer()->getName()] == false) {
          $ev->setCancelled(true);
          $ev->getPlayer()->sendMessage(Color::RED ."§c§l•§b Bạn cần đăng nhập mật khẩu OP§c•\n§b♦Cú Pháp: §a/dnop [mật khẩu]");
          }
         }
        }
        
      public function onChat(PlayerChatEvent $ev) {
        if($ev->getPlayer()->isOp()) {
       
        if($this->logged[$ev->getPlayer()->getName()] == false) {
          $ev->setCancelled(true);
          $ev->getPlayer()->sendMessage(Color::RED ."§c§l•§b Bạn cần đăng nhập mật khẩu OP§c•\n§b♦Cú Pháp: §a/dnop [mật khẩu]");
          }
         }
        }
        
      public function onPlayerCommand(PlayerCommandPreprocessEvent $event)
    {
        $msg = $event->getMessage();
        if ($event->getPlayer()->isOp()) {
            if ($this->logged[$event->getPlayer()->getName()] !== true && $msg{0} == "/" && $msg != "/dnop ". $this->cfg->get("password")) {
                $event->getPlayer()->sendMessage(Color::RED ."§c§l•§b Bạn cần đăng nhập mật khẩu OP§c•\n§b♦Cú Pháp: §a/dnop [mật khẩu]");
                $event->setCancelled();
                return;
            }
        }
    }
    
      public function onJoin(PlayerJoinEvent $ev) {
         $this->logged[$ev->getPlayer()->getName()] = false;
         }
         
         public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
           if($cmd->getName() == "dnop") {
             if($sender->isOp()) {
               if(isset($args[0])) {
                 if($args[0] !== $this->cfg->get("password")) {
                   $sender->sendMessage(Color::RED ."§c•Mật Khẩu Bạn Vừa Nhập SAI");
                  } else {
                    $this->logged[$sender->getName()] = true;
                    $sender->sendMessage(Color::GREEN ."Đăng Nhập Thành Công");
                    }
                  } else {
                    $sender->sendMessage(Color::RED ."Nhập mật khẩu OP để tiếp tục");
                    }
                   } else {
                     $sender->sendMessage(Color::GREEN ."You aren't Op, you don't have todo this :P");
                     }
                    }
                   }
                 }