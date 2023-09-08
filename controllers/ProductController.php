<?php 

class ProductController {

    public function home() {
        $productModel = new ProductModel();
        $products = $productModel->getAll();
        $this->renderView('home', ['products' => $products]);
    }

    public function about() {
        $this->renderView('about', []);
    }

    public function admin() {
        $this->renderView('admin', []);
    }

    public function addProduct($name, $details, $price, $image_1, $image_2, $image_3) {
        $productModel = new ProductModel();
        $productModel->addProduct($name, $details, $price, $image_1, $image_2, $image_3);
    }

    private function renderView($viewName, $data = []) {
        extract($data);
        $contentView = './views/' . $viewName . '.php';
        include('./views/template.php');
        }
}