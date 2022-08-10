<?php


class Usuario

{

    public function Acceso($datos)
    {
        $con = new PDO('mysql:host=localhost; dbname=worldFitnessJS','root');
        $Consulta = $con -> prepare ("CALL Acceso (?,?)");
        $Consulta -> bindParam (1, $datos['txt1']);
        $Consulta -> bindParam (2, $datos['txt2']);
        $Consulta -> execute();
        $res = $Consulta -> fetch();
        return  $res;
    }

    public function Registrar($a)
    {
      try{ 
        $con = new PDO('mysql:host=localhost; dbname=worldFitnessJS','root');
        $s = $con -> prepare("call RegistrarCliente(?,?,?,?,?,?)");
        $s -> bindParam(1, $a['txt1']);
        $s -> bindParam(2, $a['txt2']);
        $s -> bindParam(3, $a['txt3']);
        $s -> bindParam(4, $a['txt4']);
        $s -> bindParam(5, $a['txt5']);
        $s -> bindParam(6, $a['txt6']);
        $s -> execute();
        return "1";
    
      }
      catch(exception $e)
      {
        return $e ->getMessage();
      }
    }

}
?>