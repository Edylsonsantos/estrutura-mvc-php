<?php
require_once 'core/Controller.php';
// controllers/HomeController.php
class FormController extends Controller {
    public function index() {
        $this->form('form');
    }
}
?>