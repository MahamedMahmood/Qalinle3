<?php 

namespace App\Core;

use PDO;

abstract class AbstractRepository 
{

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    abstract public function getTableName();
    abstract public function getModelName();
  
      function All() {
            $table = $this->getTableName();
            $model = $this->getModelName();
          global $pdo;
        $stt =  $this->pdo->query("SELECT * FROM `$table`");
        $posts = $stt->fetchAll(PDO::FETCH_CLASS, "$model");
        return $posts;
      }
      
      function find($id, $mail) {
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stt = $this->pdo->prepare("SELECT * FROM `$table` WHERE `id`= :id OR `mail`= :mail");
        $stt->execute([
          'id' => $id,
          'mail' => $mail
           ]);
        $stt->setFetchMode(PDO::FETCH_CLASS, "$model");
        $post = $stt->fetch(PDO::FETCH_CLASS);
        return $post;
    
     
  
  
      }

      function findByEmail($mail) {

        $table = $this->getTableName();
        $model = $this->getModelName();

        $stt = $this->pdo->prepare("SELECT * FROM `$table` WHERE mail= :mail");
        $stt->execute(['mail' => $mail]);
        $stt->setFetchMode(PDO::FETCH_CLASS, "$model");
        $post = $stt->fetch(PDO::FETCH_CLASS);
        return $post;
    
        return $post;
  
  
      }

}



?>