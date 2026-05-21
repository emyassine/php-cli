<?php declare(strict_types=1);
namespace PhpCli;
class LaunchConsole {

	use Concerns\HasConfig;
	use Concerns\HasCommands;

	/**
	 * @return void
	 */
	function __construct(public ?string $base_path)
	{
		$this->base_path = $base_path;
		$this->config_path($base_path);
		$cli_commands = $this->get_config_from_file() ?? [];
		$this->cmd_response($cli_commands);
	}
};
