<?php

declare(strict_types=1);

namespace tatchan\hunger;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Item\Item;
use pocketmine\Item\ItemFactory;
class Main extends PluginBase{

    //コマンド実行したときに動く
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        //$senderの空腹度を0にしてる
			$sender->setFood(0);
            //$senderのメッセージを送っている
				$sender->sendMessage("§a空腹にしました");
                //return trueは成功
        // return falseは失敗(設定した使い方を送る)
				return true;
	}

}
