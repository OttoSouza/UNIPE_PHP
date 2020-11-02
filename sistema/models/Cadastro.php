<?php
include("database/Database.php");

class Cadastro extends DataBase
{

  private $nome;
  private $telefone;
  private $email;

  //insert
  public function inserir($nome, $telefone, $email)
  {

    $consultaPrep = $this->connectionBD()->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:nome, :telefone, :email)");
    $consultaPrep->bindParam(":nome", $nome);
    $consultaPrep->bindParam(":telefone", $telefone);
    $consultaPrep->bindParam(":email", $email);

    $consultaPrep->execute();
  }


  public function exibir()
  {
    $tabela = $this->connectionBD()->query("SELECT id, nome, telefone, email FROM pessoa");


    if ($tabela) {
      echo "
      <table border='1'>
          <tr>
              <td>NOME</td>
              <td>TELEFONE</td>
              <td>EMAIL</td>
              <td>OPCOES</td>
          </tr>
      ";
      foreach ($tabela as $linha) {
        $id = $linha['id'];
        echo "<tr>
                    <td>" . $linha['nome'] . "</td>
                    <td>" . $linha['telefone'] . "</td>
                    <td>" . $linha['email'] . "</td>
                    <td><a href='deletar.php?id=$id'>Excluir</a></td>
                    <td><a href='editar.php?id=$id'>Editar</a></td>
                </tr>";
      }
      echo "</table>";
    }

    $tabela = null;
  }


  public function deletar($id)
  {
    $this->connectionBD()->query("DELETE FROM pessoa WHERE id = $id");
  }

  public function editar($id)
  {
    $tabela = $this->connectionBD()->query("SELECT id, nome, telefone, email FROM pessoa where id = $id");

    if ($tabela) {
      foreach ($tabela as $linha) {
        $id = $linha['id'];
        echo "
        <form action='editar.php' method='post'>
            <input type='text' name='nome' id='nome' value='{$linha['nome']}'/>
            <input type='text' name='telefone' id='telefone' value='{$linha['telefone']}'/>
            <input type='text' name='email' id='email' value='{$linha['email']}'/>
            <input type='submit' value='editar' />
        </form>
          ";
      }
      echo "</table>";
    }

    $tabela = null;
  }


  /**
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */
  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }


  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of telefone
   */
  public function getTelefone()
  {
    return $this->telefone;
  }

  /**
   * Set the value of telefone
   *
   * @return  self
   */
  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;

    return $this;
  }
}
