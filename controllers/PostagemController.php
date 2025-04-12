<?php
require_once 'core/Controller.php';
// controllers/HomeController.php
class PostagemController extends Controller {
    public function index() {
        $this->postagem('postagem');
    }
}
?>