<?php declare(strict_types=1);
namespace PhpCli;

// --- OOP --------------------------------------------------
class LaunchConsole {
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
