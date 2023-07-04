<head>
    <?php
    include('includes/head.php');
    ?>
        <link rel="stylesheet" href="css/carrinho.css">
        <title>Carrinho</title>
</head>
<body>
    <?php
    include('includes/menu.php');
    ?>
    <section>
        <div class="progresso">
            <div class="ponto"><i class="fa-solid fa-cart-shopping fa-2x" style="color: gray;"></i><br>Carrinho</div>
            <div class="ponto"><i class="fa-solid fa-credit-card fa-2xl" style="color: gray;"></i><br> Pagamento</div>
            <div class="ponto"><i class="fa-solid fa-eye fa-2xl" style="color: gray;"></i><br>Confirmação</div>
            <div class="ponto"><i class="fa-solid fa-check-double fa-2xl fa-bounce" style="color:rgb(117, 207, 109);"></i><br>Conluir</div>
        </div>
        <div class="caixa">
            <div class="consultas">
                <h1>Seu Agendamento</h1>
                <div class="lista">
                    <p>Seu Agendamento foi marcado para : </p>
                    <p>Forma de Pagamento:</p>
                    <p>Valor Pago:</p>
                    <p>Obrigado por escolher agente!</p>
                </div>
            </div>
            
        </div>
        <div class="opc">
            <a href="carrinho.php"><button id="voltar">VOLTAR</button></a>
        </div>       
    </section>
    <footer>
        <?php
        include('includes/rodape.php');
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e610ef56e1.js" crossorigin="anonymous"></script>
</body>
</html>