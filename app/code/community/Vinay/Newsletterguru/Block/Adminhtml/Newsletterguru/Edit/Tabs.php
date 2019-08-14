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

class Vinay_Newsletterguru_Block_Adminhtml_Newsletterguru_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('newsletterguru_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('newsletterguru')->__('Template'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('newsletterguru')->__('Template html'),
          'title'     => Mage::helper('newsletterguru')->__('Template html'),
          'content'   => $this->getLayout()->createBlock('newsletterguru/adminhtml_newsletterguru_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}
