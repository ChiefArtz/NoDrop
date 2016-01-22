<?php
namespace nodrop\;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\entity\ItemSpawnEvent;

class NoDrop extends PluginBase implements Listener
{


	public function onLoad()
	{
	}
	
	public function onEnable()
	{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info('Enabled');
	}
	
	public function onDrop (PlayerDropItemEvent $e)
	{
		$e->getPlayer()->sendMessage('DO NOT DROP ITEMS!');
		$e->setCancelled(true);
	}
	
	public function onItemSpawn (ItemSpawnEvent $e)
	{
		$e->getEntity()->getLevel()->removeEntity($e->getEntity());
	}
	

}
