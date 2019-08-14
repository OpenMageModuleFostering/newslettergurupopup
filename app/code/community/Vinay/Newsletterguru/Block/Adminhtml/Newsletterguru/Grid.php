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

class Vinay_Newsletterguru_Block_Adminhtml_Newsletterguru_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('newsletterguruGrid');
      $this->setDefaultSort('newsletterguru_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }
  protected function _prepareCollection()
  {
      $collection = Mage::getModel('newsletterguru/newsletterguru')->getCollection();
      
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }
  protected function _prepareColumns()
  {
      $this->addColumn('newsletterguru_id', array(
          'header'    => Mage::helper('newsletterguru')->__('ID'),
          'align'     =>'center',
          'width'     => '190px',
          'index'     => 'newsletterguru_id',
       //   'from'      =>  'newsletterguru_id',
       //   'to'        =>  'newsletterguru_id',
           'type'     =>  'number',
      ));

      $this->addColumn('title', array(
          'header'    => Mage::helper('newsletterguru')->__('Title'),
          'align'     =>'center',  
          'index'     => 'title',
      ));

      

	
     

      $this->addColumn('status', array(
          'header'    => Mage::helper('newsletterguru')->__('Status'),
          'align'     => 'center',
          'width'     => '80px',
          'index'     => 'status',
          'type'      => 'options',
          'options'   => array(
              1 => 'Enabled',
              2 => 'Disabled',
          ),
      ));
	  
        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('newsletterguru')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('newsletterguru')->__('Edit Page'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('newsletterguru')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('newsletterguru')->__('XML'));
	  
      return parent::_prepareColumns();
  }

  

  public function getRowUrl($row)
  {
      return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }

}
