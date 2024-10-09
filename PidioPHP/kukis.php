<?php 

    $cookie_name = 'user';
    $cookie_value = 'max';

    setcookie($cookie_name, $cookie_value);


    echo $_COOKIE[$cookie_name];

  

?>
  <!-- setcookie("user", "", time () - 3600); -->