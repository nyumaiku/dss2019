<?php 

if($_SERVER['PHP_AUTH_USER'] != 'vasenico' || $_SERVER['PHP_AUTH_PW'] !='123456'){
   //Si el visitante no ha introducido sus datos o si los 
   //datos proporcionados no son correctos redirigirlo a 
   //la ventana de autenticación básica HTTP
   header('WWW-Authenticate: Basic realm="Realm-Name"');
   if(substr($_SERVER['SERVER_SOFTWARE'],0,9) == 'Microsoft'){
      header('Status: 401 Unauthorized');
   }
   else{
      header('HTTP/1.0 401 Unauthorized');
   }
   $msgden  = "<h2 style=\"font-family:Impact;font-size:15pt;color:Red;\">";
   $msgden .= "No tienes acceso a este sitio</h2>";
   echo $msgden;
}
else{
   //Si estamos acá es porque el usuario introdujo los datos correctos
   $msgauth  = "<h2 style=\"font-family:Impact;font-size:15pt;color:Green;\">";
   $msgauth .= "Tus datos son correctos. Tienes acceso a este sitio</h2>";
   echo $msgauth;
}



 ?>