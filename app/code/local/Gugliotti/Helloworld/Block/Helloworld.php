<?php
/**
 * Gugliotti Helloworld Index Controller
 * 
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @package Hello World
 */
 class Gugliotti_Helloworld_Block_Helloworld extends Mage_Core_Block_Template {
    
    /**
     * isEnabled
     * 
     * Verify if the module is enabled
     * @return bool
     */
    public function isEnabled()
    {
        if (Mage::helper('gugliotti_helloworld')->getConfig('configuration/enabled')) {
            return true;
        } 
    }
    
    /**
     * getMessage
     * 
     * Return the custom message
     * @return string
     */
    public function getMessage()
    {
        if (Mage::helper('gugliotti_helloworld')->getConfig('configuration/message')) {
            return Mage::helper('gugliotti_helloworld')->getConfig('configuration/message');
        }
    }
    
    /**
     * getDefaultMessage
     * 
     * Return the default message
     * @return string
     */
    public function getDefaultMessage()
    {
        if (Mage::helper('gugliotti_helloworld')->getConfig('configuration/default_message')) {
            return Mage::helper('gugliotti_helloworld')->getConfig('configuration/default_message');
        } else {
            return 'No default message configured';
        }
    }
}
