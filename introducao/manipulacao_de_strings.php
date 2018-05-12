<?php

  echo strtoupper('convertendo para maiusculo') . '<br>' . PHP_EOL;
  echo strtolower('CONVERTENDO PARA MINUSCULO') . '<br>' . PHP_EOL;

  print substr("Americana", 1) . '<br>' . PHP_EOL;
  print substr("Americana", 1, 3) . '<br>' . PHP_EOL;
  print substr("Americana", 0, -1) . '<br>' . PHP_EOL;
  print substr("Americana", -2) . '<br>' . PHP_EOL;

  $texto = "The Beatles";

  print str_pad($texto, 20, "*", STR_PAD_LEFT) . "<br>" . PHP_EOL;
  print str_pad($texto, 20, "*", STR_PAD_BOTH) . "<br>" . PHP_EOL;
  print str_pad($texto, 20, "*") . "<br>" . PHP_EOL;

  $txt = ".oO0Oo.";
  print str_repeat($txt, 5) . "<br>" . PHP_EOL;

  $txt = "O rato roeu a roupa do rei de roma";
  print 'O comprimento é ' . strlen($txt) . "<br>" . PHP_EOL;

  print str_replace('rato', 'leão', 'O rato roeu a roupa do rei de roma') . "<br>" . PHP_EOL;

?>
