<?php

class IGN_Siteblocks_Block_List extends Mage_Core_Block_Template
{
    public $count = 5;

    public function getBlocks()
    {
        //return Mage::getResourceModel('siteblocks/block_collection');
        return Mage::getModel('siteblocks/block')->getCollection()
            ->addFieldToFilter('block_status', array('eq' => 1));
    }
}