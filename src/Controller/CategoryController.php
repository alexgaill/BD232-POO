<?php
namespace App\Controller;

use App\Model\CategoryModel;

class CategoryController {

    private CategoryModel $model;
    
    public function __construct()
    {
        $this->model = new CategoryModel;
    }

    public function index()
    {
        $categories = $this->model->findAll();
        require_once ROOT."/templates/category/index.php";
    }

    public function show()
    {
        if (isset($_GET['id']) && is_int(intval($_GET['id']))) {
            $id = intval($_GET['id']);
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }
        $category = $this->model->find($id);

        require_once ROOT. "/templates/category/show.php";
    }
}