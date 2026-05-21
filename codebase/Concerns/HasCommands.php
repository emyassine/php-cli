<?php declare(strict_types=1);
namespace PhpCli\Concerns;

trait HasCommands
{
	public array $authorized_commands = [];

	//public $output_file = (string) '';
	/** command has description, has subcommands that calls a function */
	//public $commands_files = (array) [];

    // --- Initialization --------------------------------------------------

    /** @param string $command @return string */
    private function cmd_not_found($command): string
    {
        return "Unknown command: $command\n";
    }

    //command has description and argument that calls a function or not and each argument has a description
    /** @return void @param array $cli_commands */
    function cmd_response(array $cli_commands):void
    {

    	$cli_commands = [];
     	foreach ($cli_commands as $cli_command) {}

        global $argc;
        global $argv;
        if (empty($argv[1])) {
            echo "Show Help";
        } else {
            echo $argv[1];
        }

        // --- FOOTER
        $end_mctime = number_format(\microtime(true) - CLI_START, 4);
        if($end_mctime > 1) { $t_unit = 'seconds';} else { $t_unit='second'; };
        print "\n\nCLI v" . PHPCLI_VERSION . " (" . PHPCLI_YEAR . ") — Executed in $end_mctime $t_unit\n";
        print "Copyright (c) El Moumen Yassine. LICENCE EPL-2.0\n";
    }
}
