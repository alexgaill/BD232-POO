<?php
namespace App\Controller;

use App\Model\CategoryModel;
use Core\Controller\DefaultController;

class CategoryController extends DefaultController{

    private CategoryModel $model;
    
    /**
     * Instancie les objets dont on a besoin dans toutes nos méthodes
     */
    public function __construct()
    {
        $this->model = new CategoryModel;
    }

    /**
     * Page affichant toutes nos catégories
     *
     * @return void
     */
    public function index()
    {
        // $categories = $this->model->findAll();
        // require_once ROOT."/templates/category/index.php";
        $this->render("category/index", [
            'categories' => $this->model->findAll()
        ]);
    }

    /**
     * Page affichant une catégorie en fonction de son id
     *
     * @return void
     */
    public function show()
    {
        if (isset($_GET['id']) && is_int(intval($_GET['id']))) {
            $id = intval($_GET['id']);
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }
        $category = $this->model->find($id);

        $this->render("category/show", [
            'category' => $category
        ]);
    }
}