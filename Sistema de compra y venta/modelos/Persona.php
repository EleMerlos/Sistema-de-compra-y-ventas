<?php 

require "../config/Conexion.php";

Class Persona
{
    //Implementacion del constructor
    public function __construct()
    {

    }

    //funcion para ingresar registros
    public function insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email)
    {
        $sql="INSERT INTO persona (
                tipo_persona,nombre,tipo_documento,num_documento,direccion,telefono,email) 
            VALUES ('$tipo_persona','$nombre','$tipo_documento','$num_documento','$direccion','$telefono','$email')";
        return ejecutarConsulta($sql);
    }

    //funcion para editar registros
    public function editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email)
    {
        $sql="UPDATE persona SET tipo_persona='$tipo_persona',nombre='$nombre',tipo_documento='$tipo_documento',num_documento='$num_documento',direccion='$direccion',telefono='$telefono',email='$email' WHERE idpersona='$idpersona'";
        return ejecutarConsulta($sql);
    }

    //eliminar registros
    public function eliminar($idpersona)
	{
		$sql="DELETE FROM persona WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}

    //Metodo para mostrar los datos de una persona a modificar
    public function mostrar($idpersona)
    {
        $sql ="SELECT * FROM persona WHERE idpersona='$idpersona'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Metodo para listar proveedores
    public function listarp()
    {
        $sql="SELECT * FROM persona WHERE tipo_persona='Proveedor'";
		return ejecutarConsulta($sql);
    }
    //Metodo para listar clientes
    public function listarc()
    {
        $sql="SELECT * FROM persona WHERE tipo_persona='Cliente'";
		return ejecutarConsulta($sql);
    }
}
?>