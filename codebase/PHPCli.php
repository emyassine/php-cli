<?php declare(strict_types=1);

namespace PhpCli {

	/** Good to know: PHP has a $argv built-in variable
	 *  It is a predefined variable that contains an array of all the arguments
	 *  passed to a script when it is executed from the command line (CLI).  */

	if (!PHP_SAPI === "cli") { die("This script must be run from the command line."); }

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

	// --- Global Functions --------------------------------------------------

	function config($key, $default_value) {}

	// --- OOP --------------------------------------------------

	class Command
	{
			private string $base_path = '';
			private string $config_path = '';


			/**
			 * @return void
			 */
			function handle(string $base_path):void
			{
				$this->base_path = $base_path;
				$this->cmd_response();
			}

	    // --- Initialization --------------------------------------------------

	    //public $output_file = (string) '';

	    /** command has description, has subcommands that calls a function */
	    //public $commands_files = (array) [];

	    /**
	     * @param string $command
	     * @return string */
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
	}
}

// --- Result --------------------------------------------------
return new PHPCli();
