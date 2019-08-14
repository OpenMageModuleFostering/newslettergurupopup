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


$installer = new Mage_Core_Model_Resource_Setup();

$installer->getConnection()->addColumn($installer->getTable('newsletter_subscriber'),
    'subscriber_firstname', 'varchar(50) AFTER subscriber_confirm_code');

$installer->getConnection()->addColumn($installer->getTable('newsletter_subscriber'),
    'subscriber_lastname', 'varchar(50) AFTER subscriber_firstname');

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('newsletterguru')};
CREATE TABLE {$this->getTable('newsletterguru')} (
  `newsletterguru_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `content` text NOT NULL default '',
  `status` smallint(6) NOT NULL default '0',
    `created_time` datetime NULL,
 
  PRIMARY KEY (`newsletterguru_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

   


INSERT INTO `newsletterguru` (`newsletterguru_id`, `title`, `content`, `status`) VALUES
(1, 'default', '<p style=\"text-align: center;\"><span style=\"color: #000000;\"><strong><span style=\"font-size: large;\"><em><span style=\"font-size: large;\"><em>Lorem Ipsum is simply dummy text</em></span></em></span></strong></span></p>
<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://demo.magento.mageguru.in/media/sliderguru/mail1.jpg\" width=\"112\" height=\"112\" /></p>
<p style=\"text-align: center;\"><span style=\"color: #3366ff; font-size: large; font-family: comic sans ms,sans-serif;\"><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</em></span></p>', 1),
(2, 'Christmas', '<p>&nbsp;</p><p><img style=\"height: 100%; width: 100%;\" src=\"http://demo.magento.mageguru.in/media/sliderguru/mageguruchristmas.jpg\" alt=\"\" /></p>', 1),
(3, 'christmas2', '<h1 style=\"text-align: center;\"><span style=\"font-family: comic sans ms,sans-serif; color: #ee1022; font-size: xx-large;\"><em><strong>Merry Christmas</strong></em></span></h1>
<p style=\"text-align: center;\"><span style=\"font-family: comic sans ms,sans-serif; color: #ee1022; font-size: xx-large;\"><span style=\"color: #000000; font-size: medium;\"><span style=\"color: #3366ff; font-size: large; font-family: comic sans ms,sans-serif;\"><em><span style=\"font-size: small;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span><br /></em></span></span></span></p>', 1),
(4, 'Modern', '<p style=\"text-align: center;\"><span style=\"color: #000000;\"><strong></strong><strong><span style=\"font-size: large;\"><em><span style=\"font-size: large;\"><em><strong><span style=\"font-size: large;\"><em><span style=\"font-size: large;\"><em>Lorem Ipsum is simply dummy text</em></span></em></span></strong></em></span></em></span></strong></span></p>
<p style=\"text-align: center;\"><span style=\"color: #000000;\"><strong><span style=\"font-size: large;\"><em><span style=\"font-size: large;\"><em><span>Newsletter</span></em></span></em></span></strong></span><span style=\"color: #000000;\"><strong><span style=\"font-size: large;\"><em><span style=\"font-size: large;\"><em><br /></em></span></em></span></strong></span></p>
<p style=\"text-align: center;\"><span style=\"color: #3366ff; font-size: large; font-family: comic sans ms,sans-serif;\"><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br /></em></span></p>', 1);


    ");


$installer->endSetup();




