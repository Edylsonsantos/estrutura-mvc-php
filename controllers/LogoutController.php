<?php
session_start();

// Limpar todas as variáveis de sessão
$_SESSION = array();

// Se você deseja destruir completamente a sessão, também deve apagar o cookie de sessão.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir a sessão.
session_destroy();

// Redirecionar para a página de login ou uma página pública
header('Location: ./login');
exit;
?>
