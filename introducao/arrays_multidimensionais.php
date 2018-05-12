<?php

  $carros = array(
    'Jimny' => array('cor' => 'azul', 'potencia' => '1.3', 'opcionais' => 'Ar cond.'),
    'Troller' => array('cor' => 'vermelho', 'potencia' => '3.0', 'opcionais' => 'MP3'),
    'Wrangler' => array('cor' => 'verde savana', 'potencia' => '3.6', 'opcionais' => 'Ofuscada')
  );

  echo $carros['Jimny']['cor'] . '<br>' . PHP_EOL;

  $motos = array();

  $motos['Tenere']['cor'] = 'Marrom';
  $motos['Tenere']['banco'] = 'Banco do Pedrinho';
  $motos['Tenere']['opcionais'] = 'Protetor de Farol';

  echo $motos['Tenere']['opcionais'] . '<br>' . PHP_EOL;

  foreach ($carros as $modelo => $caracteristicas){
    echo " => modelo $modelo<br>" . PHP_EOL;
    foreach($caracteristicas as $caracteristica => $valor){
      echo " - característica $caracteristica => $valor <br>" . PHP_EOL;
    }
  }

?>
