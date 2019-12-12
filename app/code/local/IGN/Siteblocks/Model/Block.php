<?php

class IGN_Siteblocks_Model_Block extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        parent::__construct;
        $this->_init('siteblocks/block');
    }
}