<?php declare(strict_types=1);
namespace PhpCli {
	/** Tip: $argv (Array of arguments): Contains all arguments passed to
	 * the script when executed from the command line (built-in variable) */
	if (PHP_VERSION_ID < 80400 )  \die("This script requires php 8.4 or above.");
	if (PHP_SAPI !== "cli")  \die("This script must be run from the command line.");
	define("PHPCLI_VERSION", "0.1.1"); define("PHPCLI_YEAR", "2026");
	/** */
	class Console {
		use Concerns\HasConfig, Concerns\HasCommands;
		/** @return void */
		function __construct(public string $base_path) {
			$this->config_basepath($base_path);
			$this->cmd_response($this->get_config_from_file() ?? []);
		}
	}
};
