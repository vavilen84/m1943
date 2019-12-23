<?php

class IGN_Siteblocks_Model_Resource_Siteblocks_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('siteblocks/siteblocks');
    }
}