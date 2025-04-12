<?php
require_once 'core/Controller.php';
// controllers/HomeController.php
class SuccessController extends Controller {
    public function index() {
        $this->success('success');
    }
}
?>