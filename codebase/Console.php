<?php declare(strict_types=1);
namespace PhpCli;
/** Good to know: PHP has a $argv built-in variable
 *  It is a predefined variable that contains an array of all the arguments
 *  passed to a script when it is executed from the command line (CLI).  */
 if (!PHP_SAPI === "cli") { \die("This script must be run from the command line."); }
 define("PHPCLI_VERSION", "0.1.1"); define("PHPCLI_YEAR", "2026");
 class Console {
	/** @return void */
	function handle(/*Config $config_class, */string $base_path):void {
		(new LaunchConsole())->handle($base_path);
	}
}
// --- Result --------------------------------------------------
return new Console();
