<?php

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager;

/**
 * Doctrine bootstrap library for CodeIgniter
 *
 * @author cvivenes
 * @link   http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2
 */
class Doctrine {

    public $em;

    public function __construct() {
        require_once __DIR__ . '/Doctrine/ORM/Tools/Setup.php';
        Setup::registerAutoloadDirectory(__DIR__);

        // Load the database configuration from CodeIgniter
        require APPPATH . 'config/database.php';


        // Database connection information
        $connection_options = array(
            'driver' => 'pdo_' . $db['default']['dbdriver'],
            'user' => $db['default']['username'],
            'password' => $db['default']['password'],
            'host' => $db['default']['hostname'],
            'dbname' => $db['default']['database']
        );

        // With this configuration, your model files need to be in application/models/Entity
        // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
        $models_namespace = 'Entity';
        $models_path = APPPATH . 'models';
        $proxies_dir = APPPATH . 'models/Proxies';
        $metadata_paths = array(APPPATH . 'models');

        // Set $dev_mode to TRUE to disable caching while you develop
        $dev_mode = true;

        // If you want to use a different metadata driver, change createAnnotationMetadataConfiguration
        // to createXMLMetadataConfiguration or createYAMLMetadataConfiguration.
        $config = Setup::createAnnotationMetadataConfiguration($metadata_paths, $dev_mode, $proxies_dir);
        $this->em = EntityManager::create($connection_options, $config);

        // $config instanceof Doctrine\ORM\Configuration
        // Sirve para establecer el directorio donde se encuentran
        // los ficheros YAML
        /* $driver = new YamlDriver(array(APPPATH . 'models/Mappings'));
          $config->setMetadataDriverImpl($driver); */

        $loader = new ClassLoader($models_namespace, $models_path);
        $loader->register();
    }

}
