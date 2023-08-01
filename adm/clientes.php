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
                                    
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>CPF</th>
                                    <th>Senha</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
</main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/scriptBack.js"></script>
</body>

</html>