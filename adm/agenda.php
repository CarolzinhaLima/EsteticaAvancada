<?php
    include("php/conexao.php"); 
       
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href="css/adm.css" rel="stylesheet" type="text/css" />v
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
                    <a href="index.php"><span style="display:flex; justify-content: center; background-color:black; padding: 10px; border-radius:15px; " class="ti-arrow-left"></span></span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content full-container">
        <main>
            <section class="recent">
                
            </section>
        </main>
    </div>

</body>

</html>