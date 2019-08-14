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

class Vinay_Newsletterguru_Model_Mysql4_Newsletterguru extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the bannerslider_id refers to the key field in your database table.
        $this->_init('newsletterguru/newsletterguru', 'newsletterguru_id');
    }
}
