<?php declare(strict_types=1);
namespace PhpCli;

class Config {
	public string $config_path;
	public string $base_path;

	function handle(string $base_path):void
	{
		$this->base_path = $base_path;
		$this->config_path = "$base_path/configuration";
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
