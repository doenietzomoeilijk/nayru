<?php
/**
 * Factory for configuration objects.
 *
 * @package Nayru
 * @subpackage Configuration
 * @copyright 2013 Jan-Marten "Joh Man X" de Boer
 */

namespace Nayru\Configuration;

use \Nayru\Configuration;
use \Nayru\Storage\Adapter\File;

/**
 * Factory.
 */
class Factory
{
    /**
     * The serializer for JSON.
     *
     * @const string SERIALIZER_JSON
     */
    const SERIALIZER_JSON = '\Nayru\Serializer\JsonConf';

    /**
     * The serializer for PHP.
     *
     * @const string SERIALIZER_PHP
     */
    const SERIALIZER_PHP = '\Nayru\Serializer\Php';

    /**
     * Get the configuration from a given JSON file.
     *
     * @param string $file
     * @return \Nayru\Configuration
     */
    public static function getFromJsonFile($file)
    {
        $storage = new File($file);
        $config = new Configuration;
        $serializer = self::SERIALIZER_JSON;
        $config->setSerializer(new $serializer);
        $config->setStorage($storage);
        $config->loadStorage();
        return $config;
    }
}
