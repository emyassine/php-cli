<?php declare(strict_types=1);
namespace PhpCli;

/** Good to know: PHP has a $argv built-in variable
 *  It is a predefined variable that contains an array of all the arguments
 *  passed to a script when it is executed from the command line (CLI).  */
 if (!PHP_SAPI === "cli") { \die("This script must be run from the command line."); }

class Config {

	public function __construct(public string $base_path,
								public string $config_path){
		$this->base_path = $base_path;
		$this->config_path = $config_path;
	}

	/** @return void */
	public function dot_notation():void{}

	/** @return void @param $key @param $default_value */
	public function get_config_from_file($key, $default_value):void {}

};

// --- Global Functions --------------------------------------------------
function cli_config($key, $default_value) {
	return $config_class::get_config_from_file($key, $default_value);
}

// --- Definitions --------------------------------------------------
define("AUTHORIZED_COMMANDS", [
    " " => "",
    "add" => "",
    "update" => "",
    "delete" => "",
    "mark-in-progress" => "",
    "mark-done" => "",
    "list" => "",
    "list done" => "",
    "list todo" => "",
    "list in-progress" => "",
]);
