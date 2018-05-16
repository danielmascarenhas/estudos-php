<?php

  // exibe inicio da tabela
  echo '<table border=1 style="min-width:500px">
          <tr bgcolor=#c0c0c0>
            <td align="center"></td>
            <td align="center">Código</td>
            <td align="center">Nome</td>
          </tr>';

  // abre conexao com o banco
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');

  // define consulta que sera realizada
  $query = 'SELECT codigo, nome from famosos';

  //envia consulta ao banco de dados
  $result = mysqli_query($conn, $query);

  if($result){
    // percorre resultados da pesquisa
    while($row = mysqli_fetch_array($result)){
      $codigo = $row['codigo'];
      $nome = $row['nome'];

      // exibe uma linha de resultados
      echo "<tr>
              <td align='center'><a href='edit.php?codigo={$codigo}'> Editar </a></td>
              <td align='center'>{$codigo}</td>
              <td align='left'>{$nome}</td>
            </td>";
    }
  }

  // fecha conexao
  mysqli_close($conn);

  // imprime fechamento da tabela
  echo '</table>';
?>
