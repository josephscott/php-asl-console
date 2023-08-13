<?php
declare( strict_types = 1 );
namespace ASL;

class Console {
	public function clear(): void {
		echo "\x1b[2J";
	}
}
