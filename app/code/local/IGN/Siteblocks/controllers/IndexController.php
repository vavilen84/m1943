<?php
class IGN_Siteblocks_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $isEnabled = Mage::getStoreConfig('siteblocks/general/blocks_count', Mage::app()->getStore());
        var_dump($isEnabled);die;
    }
}