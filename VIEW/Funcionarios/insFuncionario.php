<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Funcionario.php'; 
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Funcionario.php'; 
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';

    session_start(); // Inicia a sessão

    // Verifica se o ID já existe
    $id = $_POST['txtID'];
    $sql = "SELECT * FROM funcionario WHERE ID = ?";
    $con = \DAL\Conexao::conectar();
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['erro'] = "Ops! Este ID já está em uso. Tente outro ID";
        \DAL\Conexao::desconectar();
        header('Location: formFuncionario.php');
        exit();
    }

    \DAL\Conexao::desconectar();

    $funcionario = new \MODEL\Funcionario();

    $funcionario->setID($_POST['txtID']);
    $funcionario->setNome($_POST['txtNome']);
    $funcionario->setDataNascimento($_POST['txtDataNascimento']);
    $funcionario->setCPF($_POST['txtCPF']);
    $funcionario->setEndereco($_POST['txtEndereco']);
    $funcionario->setCidade($_POST['txtCidade']);
    $funcionario->setTelefone($_POST['txtTelefone']);
    $funcionario->setEmail($_POST['txtEmail']);
    $funcionario->setCargoID($_POST['txtCargoID']);

    $bllFunc = new \BLL\Funcionario(); 
    $result =  $bllFunc->Insert($funcionario);  

    try {
        $result = $bllFunc->Insert($funcionario);
        $_SESSION['erro'] = ''; // Limpe a mensagem de erro se a inserção for bem-sucedida
    } catch (Exception $e) {
        $_SESSION['erro'] = "Erro ao inserir o funcionário: " . $e->getMessage();
    }
    
    header("Location: formFuncionario.php");
    exit();

?>