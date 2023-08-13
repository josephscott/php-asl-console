<?php
declare( strict_types = 1 );
namespace ASL;

// List of escape codes
// https://gist.github.com/fnky/458719343aabd01cfb17a3a4f7296797
class Console {
	public function clear(): void {
		echo "\x1b[2J";
	}

	public function move_home(): void {
		echo "\x1b[H";
	}

	public move_to( int $line, int $col ):void {
		echo "\x1b[{$line};{$col}H";
	}
}
