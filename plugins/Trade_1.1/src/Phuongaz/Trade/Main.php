<?php

namespace Phuongaz\Trade;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;
class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TF::GREEN . "§b--------------------\n§e Trade Remake All Item by Phuongaz §a=> §bON\n §b--------------------");
	}
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if ($cmd->getName() == "trade"){
		$sender->sendMessage("§c Sữ Dụng /trade list đễ xem danh sách trade");
		if(isset($args[0])){
				if(isset($args[0])){
				switch(strtolower($args[0])){ 
				case "list":
$sender->sendMessage(TF::BLUE . "§l§o§e-=§d Danh Sách Trade§e=-");
$sender->sendMessage("§a§l Mía[x64] §eđỏi lấy§c Bedrock§d [br]\n");
$sender->sendMessage("§a§l Bedrock[x3] §e đỏi lấy §cCúp Dragon§d [cupdr]\n");
$sender->sendMessage("§l§a Bedrock[x10]§e đỏi lấy Kiếm Zeus§d[kzeus]\n"); 
$sender->sendMessage("§a§l Bedrock[x10]§e đỏi lấy §b SET-Bedrock§d [sbr]\n");

$sender->sendMessage("§l§a/trade [item] đễ đỏi đồ nhé");
return true;
						   break;
					   }
				   }
			
			}
 if(isset($args[0])){
				if(isset($args[0])){
				switch(strtolower($args[0])){
				   
						  case "br":
						  $p = $this->getServer()->getPlayer($sender->getName());
						  $item = Item::get(7, 0, 1);
						  $item->setCustomName("§r§b-=|§6BedRock§b|=-");
						  if($sender->getInventory()->contains(Item::get(338, 0, 64))){
							  $item->setLore(array(TF::RED."§4§l=======§c[§eNội tại§c]§4=======\n§bĐộ bền: §a⬛⬛⬛⬛⬛⬛⬛⬛⬛⬛\n §e[§c+§e] §d Nếu bạn đặc vật phẩm này xuống đất thì mãi mãi Không thể hồi phục \n§e§l-=§dEnchant§e=-§r\n§a Protection: §b100000\n \n§l§c❤§e §aThông Tin Vật Phẩm§c ❤\n §e Được Chôn vùi sâu trong lòng đất hàng tỉ năm"));
							  $item->addEnchantment(Enchantment::getEnchantment(0)->setLevel(10000));
							 
							  $sender->getInventory()->addItem($item);
							  $sender->getInventory()->removeItem(Item::get(338,0,64));
							  $sender->sendMessage("§e[§aTrade§5§e] §a➡ ".TF::YELLOW . "§e❤❤❤❤❤❤\n§a Trade Thành Công Bạn nhận được X1 Bedrock \n§e❤❤❤❤❤❤");
						  }
						  else{
							  $sender->sendMessage("§e[§aTrade§e] §a➡".TF::RED . "Bạn không có vật phẩm để đổi"); 						}
							return true;
						  break;
						  case "sbr":
						  $item1 = Item::get(310, 0, 1);
						 $item2 = Item::get(311, 0, 1);
						 $item3 = Item::get(312, 0, 1);
						 $item4 = Item::get(313, 0, 1);
						 $item5 = Item::get(276, 0, 1);
						 $item6 = Item::get(278, 0, 1);
						 $item7 = Item::get(278, 0, 1);
						 $item8 = Item::get(279, 0, 1);
						 $name1 = $item1->setCustomName("§r§e-=|§dMũ Bedrock§e|=-");
						 $name2 = $item2->setCustomName("§r§e-=|§dÁo Bedrock§e|=-");
						 $name3 = $item3->setCustomName("§r§e-=|§dQuần Bedrock§e|=-");
						 $name4 = $item4->setCustomName("§r§e-=|§dGiày Bedrock§e|=-");
						 $name5 = $item5->setCustomName("§e-=|§dKiếm Bedrock§e|=-");
						 $name6 = $item6->setCustomName("§r§e-=|§dCúp Bedrock§e|=-");

						  if ($sender->getInventory()->contains(Item::get(7,0,10))){
							  $item1->setLore(array("§c§l=======§e[§bINFO§e]§c=======\n §l§aĐộ bá: §a⬛⬛⬛⬛⬛⬛⬛ \n§l§a Độ hiếm:§a ⬛⬛⬛⬛⬛⬛⬛\n \n §e§l ---- §bLịch Sữ Thần Thánh §e----\n §dSet §bBedRock§d được tu luyện từ loại đá \n cứng nhất thế giới chỉ có những người nào \n thật chăm chỉ mới có thể sở hữu được nó...\n§c╔═══════╗\n§c║ §bBEDROCK§c  ║\n§c╚═══════╝ "));
							  $item2->setLore(array("§c§l=======§e[§bINFO§e]§c=======\n §l§aĐộ bá: §a⬛⬛⬛⬛⬛⬛⬛ \n§l§a Độ hiếm:§a ⬛⬛⬛⬛⬛⬛⬛\n \n §e§l ---- §bLịch Sữ Thần Thánh §e----\n §dSet §bBedRock§d được tu luyện từ loại đá \n cứng nhất thế giới chỉ có những người nào \n thật chăm chỉ mới có thể sở hữu được nó...\n§c╔═══════╗\n§c║ §bBEDROCK§c  ║\n§c╚═══════╝ "));
			$item3->setLore(array("§c§l=======§e[§bINFO§e]§c=======\n §l§aĐộ bá: §a⬛⬛⬛⬛⬛⬛⬛ \n§l§a Độ hiếm:§a ⬛⬛⬛⬛⬛⬛⬛\n \n §e§l ---- §bLịch Sữ Thần Thánh §e----\n §dSet §bBedRock§d được tu luyện từ loại đá \n cứng nhất thế giới chỉ có những người nào \n thật chăm chỉ mới có thể sở hữu được nó...\n§c╔═══════╗\n§c║ §bBEDROCK§c  ║\n§c╚═══════╝ "));			$item4->setLore(array("§c§l=======§e[§bINFO§e]§c=======\n §l§aĐộ bá: §a⬛⬛⬛⬛⬛⬛⬛ \n§l§a Độ hiếm:§a ⬛⬛⬛⬛⬛⬛⬛\n \n §e§l ---- §bLịch Sữ Thần Thánh §e----\n §dSet §bBedRock§d được tu luyện từ loại đá \n cứng nhất thế giới chỉ có những người nào \n thật chăm chỉ mới có thể sở hữu được nó...\n§c╔═══════╗\n§c║ §bBEDROCK§c  ║\n§c╚═══════╝ "));
$item5->setLore(array("§c§l=======§e[§bINFO§e]§c=======\n §l§aĐộ bá: §a⬛⬛⬛⬛⬛⬛⬛ \n§l§a Độ hiếm:§a ⬛⬛⬛⬛⬛⬛⬛\n \n §e§l ---- §bLịch Sữ Thần Thánh §e----\n §dSet §bBedRock§d được tu luyện từ loại đá \n cứng nhất thế giới chỉ có những người nào \n thật chăm chỉ mới có thể sở hữu được nó...\n§c╔═══════╗\n§c║ §bBEDROCK§c  ║\n§c╚═══════╝ "));
$item6->setLore(array("§c§l=======§e[§bINFO§e]§c=======\n §l§aĐộ bá: §a⬛⬛⬛⬛⬛⬛⬛ \n§l§a Độ hiếm:§a ⬛⬛⬛⬛⬛⬛⬛\n \n §e§l ---- §bLịch Sữ Thần Thánh §e----\n §dSet §bBedRock§d được tu luyện từ loại đá \n cứng nhất thế giới chỉ có những người nào \n thật chăm chỉ mới có thể sở hữu được nó...\n§c╔═══════╗\n§c║ §bBEDROCK§c  ║\n§c╚═══════╝ "));
			$sender->getInventory()->removeItem(Item::get(7,0,10));
							  $item1->addEnchantment(Enchantment::getEnchantment(0)->setLevel(10));
							 $item1->addEnchantment(Enchantment::getEnchantment(5)->setLevel(2));
							 $item1->addEnchantment(Enchantment::getEnchantment(17)->setLevel(100));
							 $item2->addEnchantment(Enchantment::getEnchantment(0)->setLevel(10));
							 $item2->addEnchantment(Enchantment::getEnchantment(5)->setLevel(2));
							 $item2->addEnchantment(Enchantment::getEnchantment(17)->setLevel(100));
							 $item3->addEnchantment(Enchantment::getEnchantment(0)->setLevel(10));
							 $item3->addEnchantment(Enchantment::getEnchantment(5)->setLevel(2));
							 $item3->addEnchantment(Enchantment::getEnchantment(17)->setLevel(100));
							 $item4->addEnchantment(Enchantment::getEnchantment(0)->setLevel(10));
							 $item4->addEnchantment(Enchantment::getEnchantment(5)->setLevel(2));
							 $item4->addEnchantment(Enchantment::getEnchantment(17)->setLevel(100));
							 $item5->addEnchantment(Enchantment::getEnchantment(9)->setLevel(40));
							 $item5->addEnchantment(Enchantment::getEnchantment(12)->setLevel(2));
							 $item5->addEnchantment(Enchantment::getEnchantment(17)->setLevel(100));
							 $item6->addEnchantment(Enchantment::getEnchantment(15)->setLevel(9));
							 $item6->addEnchantment(Enchantment::getEnchantment(17)->setLevel(100));
							   $sender->getInventory()->addItem($item1);
							 $sender->getInventory()->addItem($item2);
							 $sender->getInventory()->addItem($item3);
							 $sender->getInventory()->addItem($item4);
							 $sender->getInventory()->addItem($item5);
							 $sender->getInventory()->addItem($item6);
							 $item1->setCustomName($name1);
							 $item2->setCustomName($name2);
							 $item3->setCustomName($name3);
							 $item4->setCustomName($name4);
							 $item5->setCustomName($name5);
							 $item6->setCustomName($name6);
							  $sender->sendMessage("§e❤❤❤❤❤❤❤❤❤❤\n§l§e[§aTrade§e]§a Trade thành công\n§e❤❤❤❤❤❤❤❤❤❤ ");
						  }
						  else{
							  $sender->sendMessage("§e[§aTrade§5§e]§a➡ ".TF::RED . "Bạn Không Có Đủ Vật Phẩm Để Đổi"); 
							  }
 return true;
					  break;
					  case "cupdr":
						  $p = $this->getServer()->getPlayer($sender->getName());
						  $item = Item::get(278,0,1);
						  $item->setCustomName("§r§e《§b<§cCúp Dragon§b>§e》§r");
					  if ($sender->getInventory()->contains(Item::get(7,0,3))){
							  $item->setLore(array(TF::RED."§c§l➖➖➖=======§e[§b Nội Tại §e]§c=======\n§bTốc độ Mine: §a⬛⬛⬛⬛⬛§c⬛⬛\n§b Gia tài: §a⬛⬛⬛§c⬛⬛⬛⬛⬛\n§bDame: §a⬛⬛§c⬛⬛⬛⬛⬛\n \n ➖➖➖§e-=|§dEnchant§e|=-\n§aEfficiency: §bIX \n§aUnreaking:§b X§e \n§aLooting:§b X\n§aFortune: §bX §e➖➖➖❤§b Thông Tin §e❤ \n§e Cúp giúp việc Mine dễ dàng hơn \n \n §1 Hàng Hiếm"));
							  $sender->getInventory()->removeItem(Item::get(7,0,3));
							  $item->addEnchantment(Enchantment::getEnchantment(15)->setLevel(10));
							  $item->addEnchantment(Enchantment::getEnchantment(17)->setLevel(10));
						$item->addEnchantment(Enchantment::getEnchantment(14)->setLevel(10));  
							   $item->addEnchantment(Enchantment::getEnchantment(18)->setLevel(10));
							  $sender->getInventory()->addItem($item);
							  $sender->sendMessage("§e➖➖❤❤❤❤❤❤❤\n§l§e[§aTrade§5§e]§a ➡".TF::YELLOW . "§eTrade thành công\§e➖➖❤❤❤❤❤❤❤");
						  }
						  else{
							  $sender->sendMessage("§e[§aTrade§5§e]§a➡ ".TF::RED . "Bạn Không Có Đủ Vật Phẩm Để Đổi"); 
							  }
return true;
					  break;
					  case "kzeus":
						  $p = $this->getServer()->getPlayer($sender->getName());
						  $item = Item::get(276,0,1);
						  $item->setCustomName("§r§e-§b=§d|§a Kiếm §cZues§d |§b=§e-");
					  if ($sender->getInventory()->contains(Item::get(7,0,10))){
							  $item->setLore(array(TF::RED."➖➖§l§c=====§d>§b[ Trang Bị Thần Thánh §b]§d<§c=====\n §eDame: §1+50 §a⬛⬛⬛⬛⬛⬛⬛\n §eSắt nét: §1+30 §a⬛⬛⬛⬛⬛⬛⬛\n \n §e Vật Phẩm hiếm\n §e§o-=|§dEnchant§e|=-§r§l\n §aShappness:§b XXX \n \n ➖➖§l§c§o❤§b Nội Tại §c❤§r§l\n §e- Không bị phá vở \n §e Gây cháy cho đối thủ\n ➖➖➖§b⚫§dThông tin§b⚫\n §a Trang bị cấm \n Thất lạc bấy lâu nay đã \n hiện diện ở Thế giới §b§oEA§r"));
							  $sender->getInventory()->removeItem(Item::get(7,0,10));
							  $item->addEnchantment(Enchantment::getEnchantment(12)->setLevel(5));
							  $item->addEnchantment(Enchantment::getEnchantment(13)->setLevel(2));
							  $item->addEnchantment(Enchantment::getEnchantment(9)->setLevel(30));
						  $sender->getInventory()->addItem($item);
							  $sender->sendMessage("§e[§aTrade§e]§a ➡".TF::YELLOW . "§aBạn Trade thành công!");
						  }
						  else{
							  $sender->sendMessage("§e[§aTrade§e]§a➡ ".TF::RED . "Bạn Không Có Đủ Vật Phẩm Để Đổi"); 
							  }
				   return true;
				   break;
	case "thietbang":
						  $p = $this->getServer()->getPlayer($sender->getName());
						  $item = Item::get(369, 0, 1);
						  $item->setCustomName("§r§e Gậy Wukong");
					  if ($sender->getInventory()->contains(Item::get(263, 0, 5))){
							  $item->setLore(array(TF::RED . "§e♦§a Dùng đễ đỏi set Wukong"));
							  $sender->getInventory()->removeItem(Item::get(263, 0, 5));
						  $item->addEnchantment(Enchantment::getEnchantment(0)->setLevel(999));
							  $item->addEnchantment(Enchantment::getEnchantment(17)->setLevel(999));
							  $sender->getInventory()->addItem($item);
							  $sender->sendMessage("§e[§aTrade§5VN-AIRLINE§e]§a ➡".TF::YELLOW . "§eBạn Đã Đổi Thành công §dThan khởi đầu §e lấy §e Gậy Wukong");
						  }
						  else{
							  $sender->sendMessage("§e[§aTrade§5VN-AIRLINE§e]§a➡ ".TF::RED . "Bạn Không Có Đủ Vật Phẩm Để Đổi");  }
						  }
						return true;
				}
				return true;
			}
		}
	}
}
