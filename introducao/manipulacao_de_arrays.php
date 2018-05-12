<?php

  $a = array('verde', 'azul', 'vermelho');

  // inclui valor no inicio e final do array
  array_unshift($a, 'amarelho');
  array_push($a, 'branco');

  // elimina valor no inicio e final do array
  array_shift($a);
  array_pop($a);

  // recebe um array e retorna-o na ordem inversa
  $b = array_reverse($a);

  // mescla dois ou mais arrays
  $x = array('verde', 'azul');
  $y = array('vermelho', 'amarelo');
  $z = array_merge($x, $y);

  $c = array_keys($a);
  $d = array_values($a);
  $e = count($a);
  $f = in_array('azul', $a);
//  sort($a);
//  rsort($a);
//  asort($a);
//  ksort($a);
//  krsort($a);

  $data = "11/05/2018";
  $vetor = [10, 05, 2018];

  print_r(explode('/', $data));
  echo '<br>' . PHP_EOL;
  print_r(implode('/', $vetor));

?>
