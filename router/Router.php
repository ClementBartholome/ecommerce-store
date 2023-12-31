<?php

class Router {

    private $productController;

    public function __construct() {
        $this->productController = new ProductController();
    }

    public function routerRequest() {
        try {
            if (isset($_GET['action'])) {
                $action = $_GET['action'];

                switch ($action) {
                    case 'about':
                        $this->productController->about();
                        break;
                    default:
                        throw new Exception("Action non valide");
                    case 'admin' :
                        $this->productController->admin();
                        break;
                    case 'add_product':
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $name = $_POST['name'];
                            $details = $_POST['details'];
                            $price = $_POST['price'];
                            $image_1 = $_FILES['image_1']['name'];
                            $image_2 = $_FILES['image_2']['name'];
                            $image_3 = $_FILES['image_3']['name'];
                            $category = $_POST['category'];	

                            $imageUploadPath = 'C:/xampp/htdocs/shop/uploaded_images/';
                            if (move_uploaded_file($_FILES['image_1']['tmp_name'], $imageUploadPath . $_FILES['image_1']['name']) &&
                                move_uploaded_file($_FILES['image_2']['tmp_name'], $imageUploadPath . $_FILES['image_2']['name']) &&
                                move_uploaded_file($_FILES['image_3']['tmp_name'], $imageUploadPath . $_FILES['image_3']['name'])) {
                                $this->productController->addProduct($name, $details, $price, $image_1, $image_2, $image_3, $category);
                                header('Location: index.php?action=admin');
                            }
                        break;
                        }
                    case 'product' :
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $this->productController->getProductById($id);
                        } else {
                            throw new Exception("Identifiant de produit non valide");
                        }
                        break;
                    case 'category' :
                        if (isset($_GET['category'])) {
                            $categoryName = $_GET['category'];
                            $this->productController->getProductsByCategory($categoryName);
                        } else {
                            throw new Exception("Nom de catégorie non valide");
                        }
                        break;
                    }
            } else {  // no action specified, display home
                $this->productController->home();
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
