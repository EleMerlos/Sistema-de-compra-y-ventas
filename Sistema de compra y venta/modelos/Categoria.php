<?php 
require "../config/conexion.php";

Class Categoria{

    public function __construct()
    {

    }
    //funcion para ingresar registros
    public function insertar($nombre,$descripcion)
    {
        $sql="INSERT INTO categoria (nombre,descripcion,condicion) VALUES ('$nombre','$descripcion', '1')";
        return ejecutarConsulta($sql);
    }
    //funcion para editar registros
    public function editar($idcategoria,$nombre,$descripcion)
    {
        $sql="UPDATE categoria SET nombre='$nombre', descripcion='$descripcion' WHERE idcategoria='$idcategoria'";
        return ejecutarConsulta($sql);
    }
    //desactivar categorias
    public function desactivar($idcategoria)
	{
		$sql="UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}
    
    public function activar($idcategoria)
    {
        $sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
        return ejecutarConsulta($sql);
    }

    //Metodo para mostrar los datos de un registro a modificar
    public function mostrar($idcategoria)
    {
        $sql ="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
        return ejecutarConsultaSimpleFila($sql);
    }
    public function listar()
    {
        $sql="SELECT * FROM categoria";
		return ejecutarConsulta($sql);
    }
    //mostrar los registros y mostrar en el select
    public function select()
    {
        $sql="SELECT * FROM categoria WHERE condicion=1";
		return ejecutarConsulta($sql);
    }
}
?>
