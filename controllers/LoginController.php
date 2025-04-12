<?php
require_once 'core/Controller.php';
require_once 'models/UserModel.php';

class LoginController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $telefone = $_POST['cell'];
            $senha = $_POST['psw'];

            try {
                // Verifica as credenciais do usuário
                $user = $this->userModel->getUserByPhone($telefone);

                if ($user && $this->userModel->verifyPassword($senha, $user['senha'])) {
                    // Autenticação bem-sucedida, define variáveis de sessão
                    $_SESSION['user_cell'] = $user['telefone'];

                    // Redirecionar para a página inicial ou área protegida
                    header('Location: ./home');
                    exit;
                } else {
                    // Credenciais inválidas
                    $errorMessage = "Login falhou, verifique suas credenciais e tente novamente!";
                    header('Location: ./login?error=' . urlencode($errorMessage));
                    exit;
                }
            } catch (PDOException $e) {
                // Outros erros
                $errorMessage = "Ocorreu um erro ao tentar fazer login.";
                header('Location: ./login?error=' . urlencode($errorMessage));
                exit;
            }
        } else {
            // Exibir o formulário de login
            $this->form('./login');
        }
    }
}
?>
