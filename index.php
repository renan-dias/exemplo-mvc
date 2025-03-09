<?php
// Arquivo: index.php
// Descrição: Ponto de entrada da aplicação, responsável por rotear as requisições.

// Carrega as configurações do sistema
require_once 'config/config.php';

// Roteamento básico (exemplo)
$controller = isset($_GET['c']) ? $_GET['c'] : 'home';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

$controllerFile = 'controllers/' . ucfirst($controller) . 'Controller.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . 'Controller';
    $controllerInstance = new $controllerClass();

    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo "Ação não encontrada.";
    }
} else {
    echo "Controlador não encontrado.";
}
?>