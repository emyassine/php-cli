<?php declare(strict_types=1);
namespace PhpCli;
abstract class Command implements Contact\CommandInterface {

	protected static string $signature = '';
	protected static string $desctiption = '';
	protected static bool $is_dangerous = '';
}
