<?php
/**
 * Log file storage adapter.
 *
 * @package Nayru
 * @subpackage Storage
 * @copyright 2013 Jan-Marten "Joh Man X" de Boer
 */

namespace Nayru\Storage\Adapter;

/**
 * LogFile.
 */
class LogFile extends \Nayru\Storage\Adapter\File
{
    /**
     * Set up a log file storage.
     *
     * @param string $logFile
     */
    public function __construct($logFile)
    {
        parent::__construct($logFile, FILE_APPEND);
    }
}
