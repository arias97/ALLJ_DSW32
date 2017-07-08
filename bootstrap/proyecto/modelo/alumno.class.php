
<?php
include "database.class.php";
class alumno extends database
	{
	public $matricula;
	public $nombre;
	public $fecha_nac;
	public $sexo;
	public $carrera;
	function __contruct()
	{
		$this ->matricula="";
			public function insertar()
			{
			$data= array('1602227',"Julio Arias",'19/11/1997','h','TIC');
		$sql="insert into alumno(matricula, nombre, fecha_nac, sexo, carrera)values(?, ?, ?, ?, ?)";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute($data);
			}
			public function  eliminar ()
			{
			public function buscar ()
			{
			}
			public function actualizar ()
				{
					
				}
			}
		}
	}
$obj=new alumno();
$obj ->insertar();
?>