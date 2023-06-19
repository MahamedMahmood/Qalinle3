<?php 

namespace App\Registerieren;

use App\Core\AbstractController;



class RegisterController extends AbstractController 
{

    public function __construct(RegisterRepository $registerRepository)
   {

    $this->registerRepository = $registerRepository;
   
   }

   public function register() {


        $fail = null;
      if(!empty($_POST)) {
        $username = $_POST['username'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
      //   $submit = $_POST['submit'];

     if(empty($username AND $mail AND $password)) {
        $fail = "Please fill in all fields.";
     } else {
      $stt = $this->registerRepository->findByEmail($mail); 
           if(empty($stt)) {
           $password_hash = password_hash($password, PASSWORD_DEFAULT);
           $this->registerRepository->findByUser($username, $mail, $password_hash);
               } else {
                     $fail = "An acount with this E-mail already exists.";
            }
      
        }
      
     }
    
    $this->render("user/Acount", [
        'fail' => $fail
    ]);
}

}


?>



