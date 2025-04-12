<?php
// core/App.php
class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check if URL is empty and set default controller and method
        if (empty($url)) {
            $url[0] = 'home'; // Default controller
        }

        if (file_exists('controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        } else {
            $this->controller = 'ErrorController';
        }

        require_once 'controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                $this->method = 'index';
                $this->params = ["Method not found"];
            }
        }

        $this->params = $url ? array_values($url) : $this->params;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return []; // Return an empty array if no URL parameter is set
    }
}
?>
