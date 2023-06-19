<?php 

// namespace App\User;

// use App\Core\AbstractRepository;
// use PDO;

// class UsersRepository extends AbstractRepository
// {

//     public function getTableName() {
//         return "users";
//     }
//     public function getModelName() {
//         return "App\\User\\UserModel";
//     }

//     public function findUserName($username, $mail) {
        
//         $table = $this->getTableName();
//         $model = $this->getModelName();
 
//         $stt = $this->pdo->prepare("SELECT * FROM `$table` WHERE username= :username OR mail= :mail");
//         $stt->execute([
//             'username' => $username,
//             'mail' =>  $mail
//     ]);
//         $stt->setFetchMode(PDO::FETCH_CLASS, "$model");
//         $user = $stt->fetch(PDO::FETCH_CLASS);
//         return $user;
    
//         return $post;
//     }

// }


?>


<!-- public function findUserName($username) {
        
        $table = $this->getTableName();
        $model = $this->getModelName();
 
        $stt = $this->pdo->prepare("SELECT * FROM `$table` WHERE username= :username");
        $stt->execute([
            'username' => $username,
    ]);
        $stt->setFetchMode(PDO::FETCH_CLASS, "$model");
        $user = $stt->fetch(PDO::FETCH_CLASS);
        return $user;
    
        return $post;
    }

} -->