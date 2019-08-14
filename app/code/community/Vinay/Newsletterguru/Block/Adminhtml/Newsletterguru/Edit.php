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


class Vinay_Newsletterguru_Block_Adminhtml_Newsletterguru_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();  


        $this->_objectId = 'id';
        $this->_blockGroup = 'newsletterguru';
        $this->_controller = 'adminhtml_newsletterguru';        
        $this->_updateButton('save', 'label', Mage::helper('newsletterguru')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('newsletterguru')->__('Delete Item'));		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);        
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('newsletterguru_content') == null) {
                    tinyMCE.execCommand('mceAddControl',false, 'newsletterguru_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'newsletterguru_content');
                }
            }
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }


    public function getHeaderText()
    {
        if( Mage::registry('newsletterguru_data') && Mage::registry('newsletterguru_data')->getId() ) {
            return Mage::helper('newsletterguru')->__("Edit Popup Template '%s'", $this->htmlEscape(Mage::registry('newsletterguru_data')->getTitle()));
        } else {
            return Mage::helper('newsletterguru')->__('Add Popup Template');
        }
    }
protected function _prepareLayout() {
		parent::_prepareLayout();
		if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
		    $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
		}
	}
}
