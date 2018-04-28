<?php

namespace Author\PixelgamesConsoleManager;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class PixelgamesConsoleManager extends PluginBase {
    
    public function onLoad() {
        $this->getLogger()->info("Laden...");
    }
    
    public function onEnable() {
        $this->getLogger()->info("Aktiviert");
    }
    
    public function onDisable() {
        $this->getLogger()->info("Deaktiviert");
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) :bool{
        if ($command->getName() == "cm") {
            if (!isset($args[0])) {
                $sender->sendMessage("§c[PGConsoleManager] Benutzung: /cm clear");
                $sender->sendMessage("§6[PGConsoleManager] Benutzung: /cm info");
                $sender->sendMessage("§6[PGConsoleManager] Benutzung: /cm help");
                return true;
            }
            
            if (!$sender instanceof Player) {
                if ($args[0] == "clear") {
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    $sender->sendMessage("§2[PGConsoleManager] #");
                    return true;
                    
                } elseif ($args[0] == "info") {
                    $sender->sendMessage("§e-------------------------------------");
                    $sender->sendMessage("§ePlugin von iStrafeNubzHDyt");
                    $sender->sendMessage("§bName: PixelgamesConsoleManager");
                    $sender->sendMessage("§bVersion: 0.4");
                    $sender->sendMessage("§bFür PocketMine-API: 3.0.0-ALPHA12");
                    $sender->sendMessage("§6Permissions: pgcm.command");
                    $sender->sendMessage("§eSpeziell für PIXELGAMES entwickelt");
                    $sender->sendMessage("§e-------------------------------------");
                    return true;
                } elseif ($args[0] == "help") {
                    $sender->sendMessage("§9---§aConsoleManager-Plugin§9---");
                    $sender->sendMessage("§a/cm clear §b-> Schafft einen größeren leeren Abstand im Log/Console für bessere Übersicht");
                    $sender->sendMessage("§6/cm info §b-> Zeigt Details über das Plugin");
                    $sender->sendMessage("§6/cm help §b-> Zeigt dieses Hilfemenü an");
                    return true;
                }
                
            } else {
                $sender->sendMessage("§c[PGConsoleManager] Dieser Befehl kann nur an der Console ausgeführt werden");
                return true;
            } 
        }
        return true;
    }
}


