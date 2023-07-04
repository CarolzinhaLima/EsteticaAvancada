<?php
    include("php/conexao.php");  

    $id                     = $_POST['id'];
    $nome_cliente           = $_POST['nome_cliente'];
    $nome_servico           = $_POST['nome_servico'];
    $data                   = $_POST['data'];
    $hora                   = $_POST['hora'];
    $telefone               = $_POST['telefone'];
    $cpf                    = $_POST['cpf'];

if(isset($_POST['id_finalizar'])){     

    $sql = ("INSERT INTO historico (id_historico,nome_cliente,nome_servico,data,hora,telefone,cpf,status) values ('$id','$nome_cliente','$nome_servico','$data','$hora','$telefone','$cpf','Finalizado')");

    $result = mysqli_query($conn,$sql);
    $rows = mysqli_affected_rows($conn);

    if($rows > 0){

        $sql2 = "DELETE FROM agenda WHERE id_agenda = '$id'";
        $result2 = mysqli_query($conn,$sql2);

        $rows2 = mysqli_affected_rows($conn);
        if($rows2 > 0){
            echo "<script> alert('Finalizando Com Sucesso!'); window.location.href='/adm/consultas.php'</script>";
        }
        else{
            echo "ERRO AO ATUALIZAR!";
        }
    }
    else {
        echo "ERRO AO TENTAR INSERIR IMFORMAÇÕES!";
    }
}
else if(isset($_POST['id_excluir'])){
    
    $sql = "DELETE FROM agenda WHERE id_agenda = '$id'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_affected_rows($conn);

    if($rows > 0){
        echo "<script> alert('Excluido Com Sucesso!'); window.location.href='/adm/consultas.php'</script>";
    }
    else{
        echo "ERRO AO EXCLUIR!";
    }
}


?>