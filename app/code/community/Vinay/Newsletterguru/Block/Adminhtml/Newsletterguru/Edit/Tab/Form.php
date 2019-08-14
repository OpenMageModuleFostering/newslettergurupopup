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

class Vinay_Newsletterguru_Block_Adminhtml_Newsletterguru_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
       $form->setHtmlIdPrefix('page_');
      $fieldset = $form->addFieldset('newsletterguru_form', array('legend'=>Mage::helper('newsletterguru')->__('Item information')));
      $wysiwygConfig = Mage::getSingleton('cms/wysiwyg_config')->getConfig(array('add_variables' => false, 'add_widgets' => false,'files_browser_window_url'=>$this->getBaseUrl().'admin/cms_wysiwyg_images/index/'));
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('newsletterguru')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

   
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('newsletterguru')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('newsletterguru')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('newsletterguru')->__('Disabled'),
              ),
          ),
      ));
     
	$fieldset->addField('content', 'editor', array(
	'name'     => 'content',
	'label'    => Mage::helper('newsletterguru')->__('Content'),
	'title'    => Mage::helper('newsletterguru')->__('Content'),
	'style'    => 'width:700px; height:500px;',
	'wysiwyg'  => true,
	
	'state'    => 'html',
	'config' => $wysiwygConfig,
	));
      
      
     
      if ( Mage::getSingleton('adminhtml/session')->getNewsletterguruData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getNewsletterguruData());
          Mage::getSingleton('adminhtml/session')->setNewsletterguruData(null);
      } elseif ( Mage::registry('newsletterguru_data') ) {
          $form->setValues(Mage::registry('newsletterguru_data')->getData());
      }
      return parent::_prepareForm();
  }
}
