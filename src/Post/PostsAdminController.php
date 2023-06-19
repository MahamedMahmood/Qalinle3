<?php 

namespace App\Post;

use App\Core\AbstractController;
use App\User\LoginService;

class PostsAdminController extends AbstractController
{

    public function __construct(
        PostsRepository $postsRepository,
        LoginService $loginService)
    {
        $this->postsRepository = $postsRepository;
        $this->loginService = $loginService;
    }

    // public function blog() 
    public function index() 
    {
        // $this->loginService->check();

        $all = $this->postsRepository->all(); 
        $this->render("post/admin/index", [
            'all' => $all
        ]);

}

public function edit() {

    // $this->loginService->check();

    $id = $_GET['id'];
     $entry = $this->postsRepository->find($id, "");

     $savedsuccess = false;
    if (!empty($_POST['title']) AND !empty($_POST['content'])) {
       $entry->title = $_POST['title']; 
       $entry->content = $_POST['content']; 
       $this->postsRepository->update($entry);
       $savedsuccess = true;
    }

     $this->render("post/admin/edit", [
        'entry' => $entry,
        'savedsuccess' => $savedsuccess
    ]);

}

}

?>