<?php

include "../modelo/usuario.php";

$i = new Usuario();

$devuelto = $i -> Registrar($_POST);

if($devuelto == 1)
{
  include "../html/clienteRegistrado.html";
}

else if(str_contains($devuelto, 'SQLSTATE[23000]: Integrity constraint violation: 1062')){
  include "../html/errorRegistrarUsuario.html";
  echo "<div class='alert hide'>
  <span class='fas fa-exclamation-circle'></span>
  <span class='msg'>Señor administador el documento que desea registrar ya esta en la base de datos, no se puede duplicar</span>
  </div>";
}

else if(str_contains($devuelto, 'SQLSTATE[HY000] [2002]')){
  include "../html/errorRegistrarUsuario.html";
  echo "<div class='alert hide'>
  <span class='fas fa-exclamation-circle'></span>
  <span class='msg'>Señor administador el servidor esta fuera de linea, intente mas tarde</span>
  </div>";
}

else{
  include "../html/errorRegistrarUsuario.html";
  echo "<div class='alert hide'>
  <span class='fas fa-exclamation-circle'></span>
  <span class='msg'><?php echo $devuelto?></span>
  </div>";
}
?>