<?php
require_once 'core/Controller.php';
require_once 'models/UserModel.php';

class AddController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                // Processar o formulário de criação de usuário
                $name = $_POST['name'];
                $telefone = $_POST['telefone'];
                $password = $_POST['password'];

                // Inserir o usuário no banco de dados
                $this->userModel->insertUser($name, $telefone, $password);
                $user = $this->userModel->getPhone($telefone);
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['nome'];
                $_SESSION['user_phone'] = $user['telefone'];
                header('Location: ./success?phone=' . urlencode($telefone));
                exit;
            } catch (PDOException $e) {
                // Em caso de erro, redirecionar para a página de erro com a mensagem de erro
                if ($e->errorInfo[1] == 1062) {
                    // Erro de campo único duplicado
                    $errorMessage = "O número de telefone já está registrado.";
                    header('Location: ./form?error=' . urlencode($errorMessage));
                    exit;
                } else {
                    // Outros erros
                    $errorMessage = "Ocorreu um erro ao registrar o usuário.";
                    header('Location: ./form?error=' . urlencode($errorMessage));
                    exit;
                }
            }
        } else {
            // Exibir o formulário de criação de usuário
            $this->account('form');
        }
    }
}
?>
