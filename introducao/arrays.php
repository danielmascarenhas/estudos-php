<?php

  $cores = array(0=>'vermelho', 1=>'azul', 2=>'verde', 3=>'amarelo');
  $cor = array('vermelho', 'azul', 'verde', 'amarelo');
  $colorir = ['vermelho', 'azul', 'verde', 'amarelo'];

  $nomes[] = 'Maria';
  $nomes[] = 'José';
  $nomes[] = 'Carlos';
  $nomes[] = 'Joaquina';

  echo $cores[0] . '<br>' . PHP_EOL;
  echo $cor[1] . '<br>' . PHP_EOL;
  echo $colorir[2] . '<br>' . PHP_EOL;
  echo $nomes[3] . '<br>' . PHP_EOL;

  $pessoa = array();

  $pessoa['nome'] = 'Maria da Silva';
  $pessoa['rua'] = 'São João';
  $pessoa['bairro'] = 'Cidade Alta';
  $pessoa['cidade'] = 'Porto Alegre';

  $cores_vivas = array('vermelho' => 'FF0000', 'azul' => '0000FF', 'verde' => '00FF00');

  echo $cores_vivas['vermelho'] . '<br>' . PHP_EOL;

  $frutas = array();

  $frutas['cor'] = 'vermelha';
  $frutas['sabor'] = 'doce';
  $frutas['formato'] = 'redondo';
  $frutas['nome'] = 'maçã';

  foreach($frutas as $chave => $fruta){
    echo "$chave => $fruta <br>" . PHP_EOL;
  }

  $contato = array();

  $contato['nome'] = 'Maria';
  $contato['empresa'] = 'Sweet Dreams';
  $contato['peso'] = 58;
  // alteracoes
  $contato['nome'] = 'Catarina';
  $contato['empresa'] = 'Heaven';
  $contato['peso'] += 2;

  print_r($contato);

?>
