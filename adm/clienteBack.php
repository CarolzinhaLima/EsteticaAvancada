<?php
    header('Content-Type: application/json');

    $nome_cliente           = $_POST['nome_cliente'];
    $email                  = $_POST['email'];
    $telefone               = $_POST['telefone'];
    $cpf                    = $_POST['cpf'];
    $senha                  = $_POST['senha'];

    if(isset($_POST['id_att'])){  

        $pdo = new PDO('mysql:host=localhost:3310; dbname=estetica;', 'root', '');

        $stmt = $pdo->prepare('UPDATE cliente SET (nome_cliente, email, telefone, cpf, senha) VALUES (:nc, :em, :te, :cp, :se )');
        $stmt->bindValue(':nc', $nome_cliente);
        $stmt->bindValue(':em', $email);
        $stmt->bindValue(':te', $telefone);
        $stmt->bindValue(':cp', $cpf);
        $stmt->bindValue(':se', $senha);
        $stmt->execute();

        if ($stmt->rowCount() >= 1) {
            echo json_encode('Att com Sucesso');
        } else {
            echo json_encode('Falha ao Att');
        }
    }
    else if(isset($_POST['id_excluir'])){
    
        $stmt = $pdo->prepare('DELETE FROM cliente WHERE id_cliente = '$id'');
        $stmt->execute();
    
        if ($stmt->rowCount() >= 1) {
            echo json_encode('Ex com Sucesso');
        } else {
            echo json_encode('Falha ao Ex');
        }
    }
?>