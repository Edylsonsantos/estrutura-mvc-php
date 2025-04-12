<?php
// controllers/UserController.php
require_once 'models/UserModel.php';
require_once 'core/Controller.php';

class UserController extends Controller {
    public function index() {
        $userModel = $this->model('UserModel');
        $users = $userModel->getUsers();
        $this->view('user', ['users' => $users]);
    }
}
?>
