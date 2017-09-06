<?php
// load Smarty library
require('../smarty/libs/Smarty.class.php');
require('ezSQL/init.php');

class KD_Smarty extends Smarty {

	var $db;

   function __construct()
   {
        parent::__construct();
        global $db;
        $this->setTemplateDir('templates/');
        $this->setCompileDir('templates_c/');
        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->caching = false;
        $this->assign('app_name', '优字');
        $this->db = $db; 
   }
}
?>