<?php declare(strict_types=1);
namespace EMYassine;

// --- Preparation --------------------------------------------------

if (!PHP_SAPI === "cli") {
    die("This script must be run from the command line.");
    // Good to know: PHP has a $argv built-in variable. It is a predefined variable that contains
    // an array of all the arguments passed to a script when it is executed from the command line (CLI).
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

class PHPCli
{
    function __invoke(): mixed
    {
        return cmd_response();
    }

    //public $base_path = (string) '';

    // --- Initialization --------------------------------------------------

    //public $output_file = (string) '';

    /** command has description, has subcommands that calls a function */
    //public $commands_files = (array) [];

    /**
     * @param string $command
     * @return string */
    function cmd_not_found($command): string
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

// --- Result --------------------------------------------------
return new PHPCli();
