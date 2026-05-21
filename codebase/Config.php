<?php declare(strict_types=1);
namespace PhpCli;

/** Good to know: PHP has a $argv built-in variable
 *  It is a predefined variable that contains an array of all the arguments
 *  passed to a script when it is executed from the command line (CLI).  */
 if (!PHP_SAPI === "cli") { \die("This script must be run from the command line."); }

class Config {

	public function __construct(

		public string $base_path,
		public string $config_path

		)
		{
			$this->base_path = $base_path;
			$this->$config_path = $config_path;
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

// --- OOP --------------------------------------------------
$launch_console = new class
{
	use Concerns\HasTrait;

	private string $base_path;

	private array $authorized_commands;


		//public $output_file = (string) '';

	    /** command has description, has subcommands that calls a function */
	    //public $commands_files = (array) [];


	/**
	 * @return void
	 */
	function handle(string $base_path):void
	{
		$this->base_path = $base_path;
		$this->cmd_response();
	}

    // --- Initialization --------------------------------------------------

    /**
    * @param string $command
    * @return string
    */
    private function cmd_not_found($command): string
    {
        return "Unknown command: $command\n";
    }
    //command has description and argument that calls a function or not and each argument has a description
    /** @return void */
    function cmd_response():void
    {
        global $argc;
        global $argv;
        if (empty($argv[1])) {
            echo "Show Help";
        } else {
            echo $argv[1];
        }
    }
};

// --- Pre-Result ----------------------------------------------

class Console {

	/**
	 * @return void
	 */
	function handle(string $base_path):void
	{
		global $launch_console;

		//$this->base_path = $base_path;
		//$launch_console::cmd_response();
	}

}

// --- Result --------------------------------------------------
return new Console();
