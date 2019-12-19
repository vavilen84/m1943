<?php
/**
 * Gugliotti Helloworld Index Controller
 * 
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @package Hello World
 */
class Gugliotti_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
    
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
}
