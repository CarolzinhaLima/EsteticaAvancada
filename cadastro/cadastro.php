<?php
    include("conexao.php");  

    
    $nome_cliente           = $_POST['nome_cliente'];
    $email                  = $_POST['email'];
    $telefone               = $_POST['telefone'];
    $cpf                    = $_POST['cpf'];
    $senha                  = $_POST['senha'];

if(isset($_POST['id_cadastrar'])){     

    $sql = ("INSERT INTO cliente (nome_cliente,email,telefone,cpf,senha) values ('$nome_cliente','$email','$telefone','$cpf','$senha')");

    $result = mysqli_query($conn,$sql);
    $rows = mysqli_affected_rows($conn);

    if($rows > 0){

        echo "<script> alert('Cadastrado Com Sucesso!'); window.location.href='/esteticaAvancada/login.php'</script>";
    }
    else{
        echo "ERRO AO CADASTRAR!";
    }
}
else {
    echo "ERRO AO TENTAR INSERIR IMFORMAÇÕES!";
}

?>