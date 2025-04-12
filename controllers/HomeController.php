<?php
require_once 'core/Controller.php';
require_once 'core/AuthMiddleware.php';
$authMiddleware = new AuthMiddleware();
$authMiddleware->handle();
// controllers/HomeController.php
class HomeController extends Controller {
    public function index() {
        $this->view('home');
    }
}
?>
