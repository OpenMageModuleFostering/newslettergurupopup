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

class Vinay_Newsletterguru_Block_Adminhtml_Newsletter_Subscriber_Grid extends Mage_Adminhtml_Block_Newsletter_Subscriber_Grid
{


    protected function _prepareColumns()
    {

        $this->addColumnAfter('subscriber_firstname', array(
            'header'    => Mage::helper('newsletterguru')->__('Subscriber First Name'),
            'index'     => 'subscriber_firstname',
            'default'   =>    '----'
        ), 'lastname');

        $this->addColumnAfter('subscriber_lastname', array(
            'header'    => Mage::helper('newsletterguru')->__('Subscriber Last Name'),
            'index'     => 'subscriber_lastname',
            'default'   =>    '----'
        ),'subscriber_firstname');
        parent::_prepareColumns();
    }
}
