<?php declare(strict_types=1);
namespace PhpCli\Concerns;
use PhpCli\Command;
trait HasCommands
{
	public string $commands_path;
	public array $authorized_commands = [];

	/** @param array $commands */
	public function commands_path(string $path): self {
		//var_dump($this);
		$this->commands_path = $path;
		return $this;
	}

	public function commands(string $commands_path): self {
		$authorized_commands =  (\glob($this->commands_path . "/*.php", GLOB_NOSORT));
		foreach($authorized_commands as $command) {
			echo "$command\n";
			$tokens = token_get_all(file_get_contents($command),T_CLASS);
			print_r($tokens);

		//	$reflection = new \ReflectionClass($fqcn);
		//
		//	if ($reflection->isInstance($myObject)) {
		//	    echo "The object is an instance of the class defined in {$filePath}";
		//	}
		//
		//	if($command instanceof Command)
		//	{ echo "GOOD" }
		//	  else
		//	{ echo "REAAAAL BAD !"}
		}
		return $this;
	}
}
