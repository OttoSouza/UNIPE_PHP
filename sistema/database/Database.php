<?php
   abstract class DataBase{

        // realizar conexao com o banco
        protected function connectionBD(){
          try {
            $bd = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
            return $bd;
          } catch (PDOException $error) {
            return $error->getMessage();
          }
        }
      }
?>
