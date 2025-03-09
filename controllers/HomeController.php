<?php
// Arquivo: controllers/HomeController.php
// Descrição: Controlador de exemplo para a página inicial.

require_once 'models/Database.php';

class HomeController {
    public function index() {
        // Lógica para buscar dados do modelo (exemplo)
        $db = new Database();
        $data = $db->query('SELECT * FROM produtos');

        // Carrega a view
        include 'views/home.php';
    }
}
?>