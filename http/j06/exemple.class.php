#!/usr/bin/php
<?php
Class Exemple{

	public $publicfoo = 0;
	private $_privatefoo = 'hello';

	function __construct(){
		print( 'Constructor called' . PHP_EOL);

		print( '$this->publicfoo: ' . $this->publicfoo . PHP_EOL);
		$this->publicfoo = 42;
		print( '$this->publicfoo: ' . $this->publicfoo . PHP_EOL);

		print( '$this->_privatefoo: ' . $this->_privatefoo . PHP_EOL);
		$this->_privatefoo = 'world';
		print( '$this->_privatefoo: ' . $this->_privatefoo . PHP_EOL);

		$this->publicbar();
		$this->_privatebar();

		return;

	}
	function __destruct(){
		print('Destructor called' . PHP_EOL);
		return;
	}
	function publicbar(){
		print('Method publicbar called' . PHP_EOL);
		return;
	}
	private function _privatebar(){
		print( 'Method _privatebar called' . PHP_EOL);
		return;
	}
}

$instance = new Exemple();

print( '$instance->publicfoo: ' . $instance->publicfoo . PHP_EOL);
$instance->publicfoo = 100;
print( '$instance->publicfoo: ' . $instance->publicfoo . PHP_EOL);

$instance->publicbar();

print( '$instance->_privatefoo: ' . $instance->_privatefoo . PHP_EOL);
$instance->_privatefoo = 100;
print( '$instance->_privatefoo: ' . $instance->_privatefoo . PHP_EOL);

$instance->_privatebar();

?>
