<?php 

namespace App\Post;

use App\Core\AbstractRepository;
use PDO;

class CommentsRepository extends AbstractRepository
{
    public function getTableName() {
        return 'comments';
      }
    
      public function getModelName() {
        return 'App\\Post\\CommentModel';
      }

      public function insertPost($postId, $content) {
      
        $table = $this->getTableName();
        $stt = $this->pdo->prepare(
          "INSERT INTO `$table` (`content`, `post_id`) VALUES (:content, :postId)"
      );
        $stt->execute([
          'content' => $content,
          'postId' => $postId
        ]);


      }

      public function allByPost($id) {
        $table = $this->getTableName();
        $model = $this->getModelName();
    
        $stt = $this->pdo->prepare("SELECT * FROM `$table` WHERE post_id= :id");
        $stt->execute(['id' => $id]);
        $comments = $stt->fetchAll(PDO::FETCH_CLASS, "$model");
    
        return $comments;
    
    }

}



?>