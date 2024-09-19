<?php
    define('URL_GOOGLE','http://www.google.com.br');
    
    //Toda variavel no PHP começa com $
   $numeroDeCidades = 10;
   echo '<h1>'.'O número de cidades é '. $numeroDeCidades . '<br>';
   
   echo '<h2>'.'O número de cidades é '. $numeroDeCidades . '<br>';
   
   $numero = 6;
   echo '<br>'.$numero;

   if(isset($numero)){
    echo '<p>a variavel existe!</p>';
   } else {
    echo '<p>a variavel nãomexiste!</p>';
   }

   echo 'Arquivo: ' . __FILE__ . '<br>';
   echo 'Versão: ' . PHP_VERSION . '<br>';
   echo 'OS: ' . PHP_OS . '<br>';

   phpinfo();
?>