<?php 

namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController {

    public function __construct(LoginService $loginService) 
    {
        $this->loginService = $loginService;

    }

    public function dashboard() {
       if($_SESSION['login']) {
        $this->render("user/dashboard", []);
       } else {
        header("Location: login");
       }
        
        }

        public function imprint() {
          
            $this->render("post/imprint", []);
          
            }

             public function logout() 
             {
                unset($_SESSION['login']);
                header("Location: login");
          }


            public function login() {
           
                    $error = null;
                    if (!empty($_POST)) {
                        $mail = $_POST['mail'];
                        $password = $_POST['password'];
                        $login = $this->loginService->attempt($mail, $password);
                    if ($login) {
                        header("Location: dashboard");
                        return;
                    } else {
                        $error = "Der Login ist Fehler geschlagen!";
                    }
                    }
            
            $this->render("user/login", [
            'error' => $error
        ]);
 }


    }

    

?>

<?php
// class LoginController extends AbstractController 

//     public function __construct(LoginService $loginService) 
//     {
//         $this->loginService = $loginService;

//     }

//     public function dashboard() {
//        $this->loginService->check();
//        $this->render("user/dashboard", []);
//     }

//     public function logout() 
//     {
//         $this->loginService->logout();
//         header("Location: login");

//     }

//     public function login() 
//     {
//         $error = false;
//         if (!empty($_POST['username']) AND (!empty($_POST['password']))) {
//             $username = $_POST['username'];
//             $password = $_POST['password'];

//            if ($this->loginService->attempt($username, $password)) {
//             header("Location: dashboard");
//             return;
//            } else {
//             $error = true;
//            }
//         }
        
//         $this->render("user/login", [
//             'error' => $error
//         ]);

 //   }











    // public function __construct(UsersRepository $usersRepository) 
    // {
    //     $this->usersRepository = $usersRepository;

    // }

    // public function dashboard() {
    //     if (isset($_SESSION['login'])) {
    //         echo "User is logged in!";
    //     } else {
    //         header("Location: login");
    //         // echo "User is not logged in";
    //     }
    // }

    // public function logout() 
    // {
    //     unset($_SESSION['login']);
    //     session_regenerate_id(true);
    //     header("Location: login");

    // }

    // public function login() 
    // {
    //     // var_dump(password_hash("test", PASSWORD_DEFAULT));
    //     $error = false;
    //     if (!empty($_POST['username']) AND (!empty($_POST['password']))) {
    //         $username = $_POST['username'];
    //         $password = $_POST['password'];

    //         $user = $this->usersRepository->findUserName($username);
            
    //         if (!empty($user)) {
    //             // if ($user->password == $password) {
    //                 if (password_verify($password, $user->password)) {
    //                     $_SESSION['login'] = $user->username;
    //                     session_regenerate_id(true);
    //                     header("Location: dashboard");
    //                     return;
    //                 // echo "login successful.";
    //                 // die();
    //             } else {
    //                 $error = true;
    //                 // $error = "Password not true";
    //             }

    //         } else {
    //             $error = "User can not find.";
    //         }
    //     }
        
    //     $this->render("user/login", [
    //         'error' => $error
    //     ]);

    // }

//}


?>