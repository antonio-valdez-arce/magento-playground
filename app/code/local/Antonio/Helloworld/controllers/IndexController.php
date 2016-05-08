<?php
class Antonio_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		echo "Hello world from Antonio";
	}
	
	public function testAction()
	{
		echo "Test action";
	}
}