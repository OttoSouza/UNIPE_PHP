<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Projeto Final</title>
</head>

<body>


  <div class="wrapper">


    <div class="form-content">
      <h1>Cadastro</h1>

      <form action="cadastrar.php" method="post">
        <div>
          <label for="nome">Nome: </label>
          <input type="text" name="nome" id="nome" />
        </div>

        <div>
          <label for="telefone">Telefone: </label>
          <input type="text" name="telefone" id="telefone" />
        </div>

        <div>
          <label for="email">Email: </label>
          <input type="text" name="email" id="email" />
        </div>

        <div>
          <input type="submit" value="Cadastrar" />
        </div>
      </form>

      <?php
      include("models/Cadastro.php");
      $tabela = new Cadastro();
      $tabela->exibir();
      ?>
      </table>

    </div>

  </div>




</body>

</html>