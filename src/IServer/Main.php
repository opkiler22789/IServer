<?php
namespace IServer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\{Command, CommandSender, ConsoleCommandSender};
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\level\sound\ClickSound;

class Main extends PluginBase implements Listener{
    
    
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::GREEN . "успешно загружен создатель плагина §e opkiler22789!");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "donate":
                if (!($sender instanceof Player)){
                	
                     } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("donate8"));
                    $sender->sendMessage("§e- За покупкой превелегий вам сюда: " . $this->getConfig()->get("website"));
                    return true;
                }
            case "rules":
                if (!($sender instanceof Player)){
                	    } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules8"));
                    return true;
                }

            case "staff":
                if (!($sender instanceof Player)){
                	    } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff8"));   
                    
                    return true;
                }
                
            case "info":
                if (!($sender instanceof Player)){
                	    } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info8"));   
                    $sender->sendMessage("§e Наша группа в Вконтакте: " . $this->getConfig()->get("vkgroup"));
                    return true;
                }
             case "ping":
                if (!($sender instanceof Player)){
                	    } else {
        
                    $sender->sendMessage(TextFormat::YELLOW . "Pong");
                    
                    return true;
                }
          
			
                break;
            }
        }
    }
?>
                    return true;
                }
            case "rules":
                if (!($sender instanceof Player)){
                	    } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("rules8"));
                    return true;
                }

            case "staff":
                if (!($sender instanceof Player)){
                	    } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("staff8"));   
                    
                    return true;
                }
                
            case "info":
                if (!($sender instanceof Player)){
                	    } else {
                    $sender->sendMessage(TextFormat::YELLOW . "--------[" . $this->getConfig()->get("nameserver") . "]--------");
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info1"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info2"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info3"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info4"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info5"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info6"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info7"));
                    $sender->sendMessage("§e- " . $this->getConfig()->get("info8"));   
                    $sender->sendMessage("§e Наша группа в Вконтакте: " . $this->getConfig()->get("vkgroup"));
                    return true;
                }
             case "ping":
                if (!($sender instanceof Player)){
                	    } else {
        
                    $sender->sendMessage(TextFormat::YELLOW . "Pong");
                    
                    return true;
                }
          
			
                break;
            }
        }
    }
?>
