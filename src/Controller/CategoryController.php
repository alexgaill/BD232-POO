<?php
namespace App\Controller;

use App\Entity\Category;
use App\Model\CategoryModel;
use Core\Controller\DefaultController;

final class CategoryController extends DefaultController{

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
        if (isset($_GET['id']) && preg_match("(\d+)", $_GET['id'])) {
            $id = intval($_GET['id']);
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }
        $category = $this->model->find($id);

        $this->render("category/show", [
            'category' => $category
        ]);
    }

    public function add()
    {
        if (!empty($_POST) && isset($_POST['name'])) {
            $category= new Category;
            $category->setName(htmlspecialchars($_POST['name']));
            $this->model->save($category);
        }

        $this->render("category/add");
    }
}