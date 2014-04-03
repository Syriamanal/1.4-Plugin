<?php

namespace CallOfDuty\CallOfDuty0;

use pocketmine\utils\TextFormat as Colors;

	class MainPlugin extends PluginBase{
		public function onLoad(){
				PocketMine\console(Colors::AQUA."Loading Call Of Duty!");
				}
		public function onEnable(){
				PocketMine\console(Colors::LIGHT_PURPLE."Enabling Call Of Duty!");
				}
		public function onDisable(){
				PocketMine\console(Colors::YELLOW." Call Of Duty Stoped!");
				}
}
