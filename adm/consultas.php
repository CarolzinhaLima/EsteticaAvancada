<?php
    include("php/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href="css/adm.css" rel="stylesheet" type="text/css" />
</head>
<style>
    button {
    padding: 10px 25px;
    border: 1px solid #34ADFF;
    background-color: #f67692;
    border-radius: 40px;
    color: #fff;
}

button:hover {
    background-color: #34ADFF;
    border-color: #34ADFF;
    color: #FFF;
    cursor: pointer;
}
</style>
<body>

<input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span>Estética-Avançada</span>
            </h3>


            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="agenda.php">
                        <span class="ti-home"></span>
                        <span>Calendário</span>
                    </a>
                </li>
                <li>
                    <a href="consultas.php">
                        <span class="ti-agenda"></span>
                        <span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="historico.php">
                        <span class="ti-agenda"></span>
                        <span>Histórico</span>
                    </a>
                </li>
                <li>
                    <a href="clientes.php">
                        <span class="ti-agenda"></span>
                        <span>Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="index.php"><span style="display:flex; justify-content: center; background-color:black; padding: 10px; border-radius:15px; " class="ti-arrow-left"></span></span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content full-container">
        <main>
    <section class="recent">
                <div>
                <form style="display:flex; justify-content: center; gap: 1rem;" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
                    <input style="border-radius: 15px; padding:10px;" type="text" name="parametro" placeholder="Cliente">
                    <button class="submit" type="submit">Buscar</button>
                </form>
                
                    <div class="activity-card">
                        <h3>Clientes Agendados</h3>

                        <div class="table-responsive">
                            <table>
                                <thead style="text-align: center;">
                                    <tr>
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th>Serviço</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th>Telefone</th>
                                    <th>CPF</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php
                                            $parametro =  filter_input(INPUT_GET, "parametro");
                                            $result = $conn->query("SELECT * FROM agenda WHERE nome_cliente LIKE '%$parametro%'");
                                                while($row = $result->fetch_object()){
                                                    if($parametro){        
                                                        echo '
                                                                <form action="finalizarServico.php" method="POST">
                                                                <tr>
                                                                    <th>'.$row->id_agenda.'</th>
                                                                    <th>'.$row->nome_cliente.'</th>
                                                                    <th>'.$row->nome_servico.'</th>
                                                                    <th>'.$row->data.'</th>
                                                                    <th>'.$row->hora.'</th>
                                                                    <th>'.$row->telefone.'</th>
                                                                    <th>'.$row->cpf.'</th>
                                                                    <th> Pendente </th>
                                                                    <th><button class="submit" name="id_excluir" type="submit">Excluir</button></th>
                                                                    <th><button class="submit" name="id_finalizar" type="submit">Finalizar</button></th>

                                                                    <input value="'.$row->id_agenda.'" name="id" type="hidden">
                                                                    <input value="'.$row->nome_cliente.'" name="nome_cliente" type="hidden">
                                                                    <input value="'.$row->nome_servico.'" name="nome_servico" type="hidden">
                                                                    <input value="'.$row->data.'" name="data" type="hidden">
                                                                    <input value="'.$row->hora.'" name="hora" type="hidden">
                                                                    <input value="'.$row->telefone.'" name="telefone" type="hidden">
                                                                    <input value="'.$row->cpf.'" name="cpf" type="hidden">
                                                                </tr>
                                                                </form>
                                                            ';
                                                    }else {
                                                        echo '    
                                                            <form action="finalizarServico.php" method="POST">
                                                            <tr>
                                                                <th>'.$row->id_agenda.'</th>
                                                                <th>'.$row->nome_cliente.'</th>
                                                                <th>'.$row->nome_servico.'</th>
                                                                <th>'.$row->data.'</th>
                                                                <th>'.$row->hora.'</th>
                                                                <th>'.$row->telefone.'</th>
                                                                <th>'.$row->cpf.'</th>
                                                                <th> Pendente </th>
                                                                <th><button class="submit" name="id_excluir" type="submit">Excluir</button></th>
                                                                <th><button class="submit" name="id_finalizar" type="submit">Finalizar</button></th>

                                                                <input value="'.$row->id_agenda.'" name="id" type="hidden">
                                                                <input value="'.$row->nome_cliente.'" name="nome_cliente" type="hidden">
                                                                <input value="'.$row->nome_servico.'" name="nome_servico" type="hidden">
                                                                <input value="'.$row->data.'" name="data" type="hidden">
                                                                <input value="'.$row->hora.'" name="hora" type="hidden">
                                                                <input value="'.$row->telefone.'" name="telefone" type="hidden">
                                                                <input value="'.$row->cpf.'" name="cpf" type="hidden">
                                                            </tr>
                                                            </form>
                                                        ';
                                                    }
                                                }
                                      ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
</main>
</div>

</body>

</html>