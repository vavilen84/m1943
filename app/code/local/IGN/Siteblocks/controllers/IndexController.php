<?php
class IGN_Siteblocks_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $count = Mage::getStoreConfig('siteblocks/general/blocks_count', Mage::app()->getStore());
        Mage::app()->getConfig()->saveConfig('siteblocks/general/blocks_count', 5);
        var_dump($count);die;
    }
}