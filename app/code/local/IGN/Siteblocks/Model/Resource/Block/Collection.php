<?php
class IGN_Siteblocks_Model_Resource_Block_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->_init('siteblocks/block');
    }
}