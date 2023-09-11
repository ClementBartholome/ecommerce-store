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

    public function addProduct($name, $details, $price, $image_1, $image_2, $image_3, $category) {
        $productModel = new ProductModel();
        $productModel->addProduct($name, $details, $price, $image_1, $image_2, $image_3, $category);
    }

    public function getProductById($id) {
        $productModel = new ProductModel();
        $product = $productModel->getById($id);
        $this->renderView('quick_view', ['product' => $product]);
    }

    public function getProductsByCategory($categoryName) {
        $productModel = new ProductModel();
        $products = $productModel->getByCategory($categoryName);
        $this->renderView('category', ['products' => $products, 'categoryName' => $categoryName]);
    }

    private function renderView($viewName, $data = []) {
        extract($data);
        $contentView = './views/' . $viewName . '.php';
        include('./views/template.php');
        }
}