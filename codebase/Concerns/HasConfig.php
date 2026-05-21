<?php declare(strict_types=1);

namespace PhpCli\Concerns;

trait HasConfig
{
	public string $config_path;
	public function config_path(string $path): self { $this->config_path = $path; return $this; }
}
