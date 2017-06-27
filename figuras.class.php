<?php
class figura{
	public $nombre;
	public $color;
	public $base;
	public $altura; 
	
	function __construct(){
		$this->nombre="";
		$this->color="";
		$this->base="";
		$this->altura="";
	}
}
class triangulo extends figura{
	public $base;
	
	function __construct(){
		$this->base=0;
	}
	function area(){
		return $this->base*$this->altura/2;
	}
	function inicializar ($n,$c,$b,$a){
		$this->nombre=$n;
		$this->color=$c;
		$this->base=$b;
		$this->altura=$a;
	}
}
$figura= new triangulo();
$figura->inicializar("triangulito","#CCA326",50,80);
echo $figura->area();
?>