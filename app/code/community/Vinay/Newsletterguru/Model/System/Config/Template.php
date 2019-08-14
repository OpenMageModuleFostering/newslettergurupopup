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

class Vinay_Newsletterguru_Model_System_Config_Template
{
    public function toOptionArray()
    {

       $collection = Mage::getModel('newsletterguru/newsletterguru')->getCollection();
         foreach($collection->getData() as $col){
         $arr[] = array('label'=>$col['title'],'value'=>$col['newsletterguru_id']);
          }
       return $arr;
    }
}
