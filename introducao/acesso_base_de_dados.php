<?php

  // abre conexao
  $con = mysqli_connect('127.0.0.1', 'root', '', 'livro');

  // insere registros
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Veríssimo')");
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
  mysqli_query($con, "INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')");

  // fecha conexao
  mysqli_close($con);

?>
