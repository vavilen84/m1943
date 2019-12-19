<?php
/**
 * Gugliotti Helloworld Helper Data
 * 
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @package Hello World
 */
class Gugliotti_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Get Config
     * 
     * Alias for getStoreConfig Magento method, specific for this module.
     * @param string $config Config key
     * @return string Config value
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('gugliotti_helloworld/' . $config);
    }
    
    /**
     * Is Enabled
     * 
     * Return true if the module is enabled
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::getStoreConfig('gugliotti_helloworld/configuration/enabled');
    }
}
