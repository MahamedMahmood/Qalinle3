<?php 

namespace App\User;

use App\Registerieren\RegisterRepository;

class LoginService 
{

    public function __construct(RegisterRepository $registerRepository)
    {
        $this->registerRepository = $registerRepository;
    }

    public function attempt($mail, $password)  
    {
        $stt = $this->registerRepository->find("", $mail);
         if ($stt) {
            if (password_verify($password, $stt->password)) {
                $stt = $this->registerRepository->find("", $mail);
                $_SESSION["id"] = $stt->id;
                $_SESSION["login"] = true;
                session_regenerate_id(true);
                return true;
               } else {
                   return false;
               }
         }
         return false;
      }



}


?>

<?php
 // $_SESSION['login'] = true;
  // session_regenerate_id(true);

    // public function attempt($username, $mail, $password) 

//             $_SESSION['login'] = $user->username;
//             session_regenerate_id(true);

//     public function check() {
//         if (isset($_SESSION['login'])) {
//             return true;
//         } else {
//             header("Location: login");
//             die();
//         }
//     }

//     public function logout() {
//         unset($_SESSION['login']);
//         session_regenerate_id(true);
//     }


      // $user = $this->registerRepository->findByUser($username, $password, $mail);
    // public function __construct(AbstractRepository $abstractRepository)
    // {
    //     $this->abstractRepository = $abstractRepository;
    // }
  // public function attempt($username, $mail, $password)

  // use App\Core\AbstractRepository;


  // $user = $this->registerRepository->findByUser("",$mail);
?>