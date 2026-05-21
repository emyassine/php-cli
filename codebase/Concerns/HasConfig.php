<?php declare(strict_types=1);
namespace PhpCli\Concerns;

trait HasConfig
{
	public function config_path(string $base_path):void {

		$initial_config_file = "$base_path/configuration/cli-paths.php";
		if(file_exists($initial_config_file))
		{echo "Config File is there: " . $initial_config_file; }
		else
		{echo "NO CONFIG FILE\n"; };

	}

	/** @return void */
	public function dot_notation():void{}

	/** @return void @param $key @param $default_value */
	public function get_config_from_file():void {}
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
