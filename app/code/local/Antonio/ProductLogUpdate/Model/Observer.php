<?php
/* 
 * The class name should follow the directory structure of Observer.php model, 
 * starting from the namespace, replacing directory separators with underscores. 
 * The directory of Observer.php is following:  app/code/local/Antonio/ProductLogUpdate/Model/Observer.php 
 */
class Antonio_ProductLogUpdate_Model_Observer
{
	public function logUpdate(Varien_Event_Observer $observer)
	{
		// Retrieve the product being updated from the event observer
		$product = $observer->getEvent()->getProduct();

		// Write a new line to var/log/product-updates.log
		$name = $product->getName();
		
		$sku = $product->getSku();
		Mage::log("{$name} ({$sku}) updated", null, 'product-updates.log');
	}
}