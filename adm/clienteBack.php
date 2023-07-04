<?php
    include("php/conexao.php");  

    $id                     = $_POST['id'];
    $nome_cliente           = $_POST['nome_cliente'];
    $email                  = $_POST['email'];
    $telefone               = $_POST['telefone'];
    $cpf                    = $_POST['cpf'];
    $senha                  = $_POST['senha'];

if(isset($_POST['id_att'])){     

    $sql = "UPDATE cliente SET nome_cliente = '$nome_cliente', email = '$email', telefone = '$telefone', cpf = '$cpf', senha = '$senha' WHERE id_cliente = '$id'";

    $result = mysqli_query($conn,$sql);
    $rows = mysqli_affected_rows($conn);

    if($rows > 0){
       
        echo "<script> alert('Atualizado Com Sucesso!'); window.location.href='/EsteticaAvancada/adm/clientes.php'</script>";
       
    }
    else {
        echo "ERRO AO TENTAR INSERIR IMFORMAÇÕES!";
    }
}
else if(isset($_POST['id_excluir'])){
    
    $sql = "DELETE FROM cliente WHERE id_cliente = '$id'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_affected_rows($conn);

    if($rows > 0){
        echo "<script> alert('Excluido Com Sucesso!'); window.location.href='/EsteticaAvancada/adm/clientes.php'</script>";
    }
    else{
        echo "ERRO AO EXCLUIR!";
    }
}

?>