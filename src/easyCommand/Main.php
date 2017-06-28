<?php
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase{
public function onEnable(){
 $this->getServer()->getLogger()->info("plugin easyCommand has been enabled");
 $this->getLogger()->info("plugin easyCommand by @plugmcpe");
 }
 public function onDisable(){
  $this->getServer()->getLogger()->info("plugin easyCommand has been disable");
  }
 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
   switch ($cmd->getName()){
    case 'g1':
    $player = $sender->getPlayer();
      $player->setGamemode(1);
      break;
     case 'g0':
     $player = $sender->getPlayer();
       $player->setGamemode(0);
       break;
      case 'h':
     $sender->setHealth(20);
       break;
   }
 }
