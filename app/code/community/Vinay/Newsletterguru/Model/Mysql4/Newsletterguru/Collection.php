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

class Vinay_Newsletterguru_Model_Mysql4_Newsletterguru_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('newsletterguru/newsletterguru');
    }
}
