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
            <div class="ponto"><i class="fa-solid fa-eye fa-2xl fa-bounce" style="color: red;"></i><br>Confirmação</div>
            <div class="ponto"><i class="fa-solid fa-check-double fa-2xl" style="color:gray;"></i><br>Conluir</div>
        </div>
        <div class="caixa">
            <div class="consultas">
                <h1>Consultas</h1>
                <div class="lista">
    
                </div>
            </div>
            <div class="resumo">
                <h1>Confirmação:</h1>
                <div class="custos">
                    <div class="custosdivs">
                        <h6>Total de Serviços  X</h6>
                        <hr>
                        <p>Forma de Pagamento: Forma Escolhida</p>
                        <div class="pix">
                            <h6>Valor dos Produtos: <br>
                            R$ 999,99 <br>
                            </h6>
                        </div>
                        <br><br>
                        <button id="btn1">CONCLUIR E AGENDAR</button><br> <br>
                        <a href="pagamento.php"><button id="voltar">VOLTAR</button></a>
                    </div>
                                            
                </div>
            </div>
        </div>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Pagina do PIX</p>

              <button id="confirmado">Confirmado</button>

            </div>
       </div>
    </section>
    <footer>
        <?php
        include('includes/rodape.php');
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e610ef56e1.js" crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>
</body>
</html>