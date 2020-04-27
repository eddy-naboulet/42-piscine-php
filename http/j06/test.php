
<?php
	class MyClass
	{
	    public $public = 'Public';
	    protected $protected = 'Protected';
	    private $private = 'Private';

	    function printHello()
	    {
	        echo $this->public;
	        echo $this->protected;
	        echo $this->private;
	    }
	}

	$obj = new MyClass();
	echo $obj->public; // Fonctionne
	echo $obj->protected; // Erreur fatale
	echo $obj->private; // Erreur fatale
	$obj->printHello(); // Affiche Public, Protected et Private
?>
