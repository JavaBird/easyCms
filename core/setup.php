<?php




	// load Smarty library
require_once  realpath(dirname(__file__).'/../'.'libs/Smarty.class.php');


define('PATH', str_replace('\\','/',realpath(dirname(__file__).'/../')));


// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class SmartyCms extends Smarty {

   function __construct()
   {
        // Class Constructor.
        // These automatically get set with each new instance.
        parent::__construct();

        $this->setTemplateDir(PATH.'/smarty/templates/');
        $this->setCompileDir(PATH.'/smarty/templates_c/');
        $this->setConfigDir(PATH.'/smarty/configs/');
        $this->setCacheDir(PATH.'/smarty/cache/');
        //$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
      
   }

}


























?>