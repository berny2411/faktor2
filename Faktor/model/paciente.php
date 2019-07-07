<?php
 require_once('conexion.php');

 class paciente extends Conexion {

      public function addPaciente ($nombre,$apellidoP,$apellidoM,$hospital,$cuartoHospital,$numTel,$email){
      	parent::conectar();

      	$nombre = parent::filtrar($nombre);
      	$apellidoP = parent::filtrar($apellidoP);
      	$apellidoM = parent::filtrar($apellidoM);
            $hospital = parent::filtrar($hospital);
            $cuartoHospital= parent::filtrar($cuartoHospital)
            $numTel = parent::filtrar($numTel);
            $email = parent::filtrar($email);

      	parent::query('INSERT INTO Paciente(nombrePaciente, apellidoPatPaciente, apellidoMatPaciente,hospital,cuartoHospital,numTelefonoPaciente,emailPaciente) values("'.$nombre.'", "'.$apellidoP.'", "'.$apellidoM.'", "'.$hospital.'", "'.$cuartoHospital.'", "'.$numTel.'","'.$email.'")');

      	parent::cerrar();


      }

      public  function getListPaciente(){
            parent::conectar();

            $consulta='SELECT * FROM Paciente';
            $extraido=parent::consultaArreglo($consulta);
            return $extraido

      }

      public function updatePaciente($id,$nombre,$apellidoP,$apellidoM,$hospital,$cuartoHospital,$numTel,$email){
      	parent::conectar();

      	$nombre = parent::filtrar($nombre);
            $apellidoP = parent::filtrar($apellidoP);
            $apellidoM = parent::filtrar($apellidoM);
            $hospital = parent::filtrar($hospital);
            $cuartoHospital= parent::filtrar($cuartoHospital)
            $numTel = parent::filtrar($numTel);
            $email = parent::filtrar($email);

      	parent::query("UPDATE Paciente SET nombrePaciente='$nombre', apellidoPatPaciente='$apellidoP', apellidoMatPaciente='$apellidoM',hospital='$hospital',cuartoHospital='$cuartoHospital',numTelefonoPaciente=''$numTel,emailPaciente='$email' WHERE idPaciente= '$id'");

      	parent::cerrar();


      }

      public function deleteAseguradora($id){

      parent::conectar();

      parent::query("DELETE FROM Aseguradora WHERE id='$id'");

      parent::cerrar();
      }
 }
?>