<?php
require_once 'core/Controller.php';
require_once 'models/UserModel.php'; // Certifique-se de incluir o modelo que contém a função getPhone

class VerifyController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        // Verifica se o parâmetro 'telefone' está presente na URL
        if (isset($_GET['telefone'])) {
            $telefone = $_GET['telefone'];
            
            // Obtém os dados do usuário com base no telefone
            $userData = $this->userModel->getPhone($telefone);

            if ($userData) {
                session_start();
                $_SESSION['user_id'] = $userData['id'];
                $_SESSION['user_name'] = $userData['nome'];
                $_SESSION['user_phone'] = $userData['telefone'];
            } else {
                // Usuário não encontrado
                echo "Nenhum usuário encontrado com este telefone.";
            }
        } else {
            // Parâmetro 'telefone' não fornecido
            echo "Parâmetro 'telefone' não fornecido.";
        }
    }
}
?>
