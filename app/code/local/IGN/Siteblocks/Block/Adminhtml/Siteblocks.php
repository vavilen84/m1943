<?php

class IGN_Siteblocks_Block_Adminhtml_Siteblocks extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        echo 123;die;
        $this->_controller = 'adminhtml_siteblocks';
        $this->_blockGroup = 'siteblocks';
        $this->_headerText = Mage::helper('siteblocks')->__('Siteblocks');

        parent::__construct();

        if ($this->_isAllowedAction('save')) {
            $this->_updateButton('add', 'label', Mage::helper('siteblocks')->__('Add New Block'));
        } else {
            $this->_removeButton('add');
        }
    }

    protected function _isAllowedAction($action)
    {
       // return Mage::getSingleton('admin/session')->isAllowed('cms/page/' . $action);
        return true;
    }
}
