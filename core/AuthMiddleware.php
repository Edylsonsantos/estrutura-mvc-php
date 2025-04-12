<?php
class AuthMiddleware {
    public function handle() {
        // Iniciar a sessão se ainda não estiver iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Verifica se as variáveis de sessão 'user_id', 'user_name' e 'user_phone' estão definidas
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name']) || !isset($_SESSION['user_phone'])) {
            // Redirecionar para a página de login com um parâmetro indicando a necessidade de login
            header('Location: ./login?error=Login-necessário-logout-realizado');
            exit;
        }
    }
}
?>

