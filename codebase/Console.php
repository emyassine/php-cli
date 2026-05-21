<?php declare(strict_types=1);
namespace PhpCli;

// --- Pre-Result ----------------------------------------------

class Console {

	/**
	 * @return void
	 */
	function handle(string $base_path):void
	{
		global LaunchConsole;

		//$this->base_path = $base_path;
		LaunchConsole::cmd_response();
	}

}

// --- Result --------------------------------------------------
return new Console();
