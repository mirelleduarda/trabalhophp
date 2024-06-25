<?php
session_start(); // Inicie a sessão
namespace VIEW\Funcionario;
include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
include_once 'C:\xampp\htdocs\trabalhophp\DAL\Funcionario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Suponha que você está tentando inserir um novo registro
    $id = $_POST['txtID'];
    // Verifica se o ID já existe
    $sql = "SELECT * FROM funcionario WHERE ID = ?";
    $con = \DAL\Conexao::conectar();
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['erro'] = "Ops! Este ID já está em uso. Tente outro ID";
    } else {
        // Código para inserir novo registro
        // ...
        $_SESSION['erro'] = ''; // Limpe a mensagem de erro se a inserção for bem-sucedida
    }

    \DAL\Conexao::desconectar();
    header('Location: formFuncionario.php'); // Redirecione de volta para o formulário
    exit();
}
?>