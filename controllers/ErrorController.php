<?php
require_once 'core/Controller.php';

class ErrorController extends Controller {
    public function index($message = "Page not found") {
        $this->view('error/index', ['message' => $message]);
    }
}
?>
