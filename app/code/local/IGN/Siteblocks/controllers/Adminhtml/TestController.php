<?php
class IGN_Siteblocks_Adminhtml_TestController extends Mage_Adminhtml_Controller_Action
{
    public function mytestAction()
    {
        var_dump($this->getRequest()->getParams());
        echo 123;die;
    }
}
