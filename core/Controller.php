<?php
// core/Controller.php
class Controller {
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }

    public function postagem($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }

    public function account($view) {
        require_once 'views/' . $view . '.php';
    }

    public function form($view) {
        require_once 'views/' . $view . '.php';
    }
    public function success($view) {
        require_once 'views/' . $view . '.php';
    }

    public function verify($view) {
        require_once 'views/' . $view . '.php';
    }
}
?>

