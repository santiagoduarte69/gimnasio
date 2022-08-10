<?php

include "../modelo/usuario.php";

$i = new Usuario();

$ret = $i -> Acceso($_POST); 


if( is_array ($ret))
{       
   if($ret[0] == 'cliente')
   {
    include "../html/indexCliente.php";

   }
   else if($ret[0] == 'administrador')
   {
    include "../html/indexAdmin.php"; 
   }

}
else
{
    include "../html/paginaPrincipal.html";
}




?>