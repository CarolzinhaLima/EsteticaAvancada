<?php
    header('Content-Type: application/json');

    $nome_cliente           = $_POST['nome_cliente'];
    $email                  = $_POST['email'];
    $telefone               = $_POST['telefone'];
    $cpf                    = $_POST['cpf'];
    $senha                  = $_POST['senha'];

    $pdo = new PDO('mysql:host=localhost:3310; dbname=estetica;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO cliente (nome_cliente, email, telefone, cpf, senha) VALUES (:nc, :em, :te, :cp, :se )');
    $stmt->bindValue(':nc', $nome_cliente);
    $stmt->bindValue(':em', $email);
    $stmt->bindValue(':te', $telefone);
    $stmt->bindValue(':cp', $cpf);
    $stmt->bindValue(':se', $senha);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Cadastro Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar Cadastro');
    }
?>