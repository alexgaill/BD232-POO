<?php
namespace App\Controller;

use App\Entity\Post;
use App\Model\PostModel;
use App\Model\CategoryModel;
use Core\Controller\DefaultController;

class PostController extends DefaultController{

    private PostModel $model;

    public function __construct()
    {
        $this->model = new PostModel;
    }

    public function index(): void
    {
        $posts = $this->model->findAllWithCategory();
        // $categories = (new CategoryModel)->findAll();

        // require_once ROOT. "/templates/posts/index.php";
        $this->render('post/index', [
            'posts' => $posts,
        ]);
    }

    public function show(): void
    {
        if (isset($_GET['id']) && is_int(intval($_GET['id']))) {
            $id = intval($_GET['id']);
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }
        // $post = $this->model->findWithCategory($id);

        // require_once ROOT. "/templates/posts/show.php";
        $this->render('post/show', [
            'post' => $this->model->findWithCategory($id)
        ]);

    }

    public function save(){}
}