<?php
/**
 * Console logger alternative for server-side
 *
 * @author Etch Akhtar
 * @version 1.0
 */

namespace ClearCutCoding\DevTools;

use Silex\Application;

class DevLogger
{
	protected $handler;

    public function __construct($logFile)
	{
		$this->handler = fopen($logFile, 'w');
	}

    public function __destruct()
	{
		fclose($this->handler);
	}

    public function log($entry)
	{
		fwrite($this->handler, $entry . PHP_EOL);
	}

}
