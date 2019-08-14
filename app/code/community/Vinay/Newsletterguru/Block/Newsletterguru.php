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

class Vinay_Newsletterguru_Block_Newsletterguru extends Mage_Core_Block_Template
{

    public function getCookieName()
    {
        return Mage::getStoreConfig('newsletter/general/cookiename');
    }

    public function getCookieLifeTime()
    {
        return Mage::getStoreConfig('newsletter/general/cookielifetime');
    }
    public function getEnablesnow()
    {
        return Mage::getStoreConfig('newsletter/general/snow');
    }

    public function isActivePopUp()
    {
        return Mage::getStoreConfig('newsletter/general/isactive');
    }

    public function getTheme()
    {
        return Mage::getStoreConfig('newsletter/general/theme');
    }

    public function getFirstTitle()
    {
        return Mage::getStoreConfig('newsletter/general/firsttitle');
    }

    public function getSecondTitle()
    {
        return Mage::getStoreConfig('newsletter/general/secondtitle');
    }

    public function getText()
    {
        return Mage::getStoreConfig('newsletter/general/message');
    }
}
