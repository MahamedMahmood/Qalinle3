<?php 

namespace App\Post;

use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository
{

  public function getTableName() {
    return 'posts';
  }

  public function getModelName() {
    return 'App\\Post\\PostModul';
  }

  public function update(PostModul $model) 
  {
    $table = $this->getTableName();
    $stt = $this->pdo->prepare("UPDATE `{$table}` SET `content` = :content, `title` = :title WHERE `id` = :id");
    $stt->execute([
      'content' => $model->content,
      'title' => $model->title,
      'id' => $model->id
    ]);
  }

 
}




?>