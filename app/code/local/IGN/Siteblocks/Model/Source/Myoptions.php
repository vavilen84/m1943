<?php

class IGN_Siteblocks_Model_Source_Myoptions
{
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('1')),
            array('value' => 0, 'label' => Mage::helper('adminhtml')->__('0')),
        );
    }

    public function toArray()
    {
        return array(
            0 => Mage::helper('adminhtml')->__('0'),
            1 => Mage::helper('adminhtml')->__('1')
        );
    }
}
