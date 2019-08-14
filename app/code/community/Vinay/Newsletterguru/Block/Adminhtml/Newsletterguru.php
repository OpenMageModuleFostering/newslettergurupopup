<?php
/**
 * @category    Development
 * @package     Vinay_Newsletterguru
 * @version     1.0.0
 * @copyright   Copyright (c) 2015 
 * @author	Vinay verma
 * @devleoper   vinayverma.march1991@gmail.com
 * Address      Rocking India

 */

class Vinay_Newsletterguru_Block_Adminhtml_Newsletterguru extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_newsletterguru';
    $this->_blockGroup = 'newsletterguru';
    $this->_headerText = Mage::helper('newsletterguru')->__('Start Adding');
    $this->_addButtonLabel = Mage::helper('newsletterguru')->__('Add Popup Template');
    
    parent::__construct();
  }
}
