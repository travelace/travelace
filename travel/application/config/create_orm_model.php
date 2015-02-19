<?php

//require_once(dirname(__FILE__)  . '/lib/Doctrine.php');
require_once ('../libraries/Doctrine.php');

spl_autoload_register(array('Doctrine', 'autoload'));
$conn = Doctrine_Manager::connection('mysql://root:orm@localhost/dbusuarios', 'doctrine');
Doctrine_Core::generateModelsFromDb('modelos', array('doctrine'), array('generateTableClasses' => true));
