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
    include('mobile/menuMobile.php');
    ?>
    <section>
        <div class="progresso">
            <div class="ponto"><i class="fa-solid fa-cart-shopping fa-2x fa-bounce" style="color: #ed506f;"></i><br>Carrinho</div>
            <div class="ponto"><i class="fa-solid fa-credit-card fa-2xl" style="color: gray;"></i><br> Pagamento</div>
            <div class="ponto"><i class="fa-solid fa-eye fa-2xl" style="color: gray;"></i><br>Confirmação</div>
            <div class="ponto"><i class="fa-solid fa-check-double fa-2xl" style="color:gray;"></i><br>Conluir</div>
        </div>
        <div class="caixa">
            <div class="consultas">
                <h1>Consultas</h1>
                <div class="lista">
    
                </div>
            </div>
            <div class="resumo">
                <h1>Resumo</h1>
                <div class="custos">
                    <div class="custosdivs">
                        <h6>Valor dos Produtos R$ 9.999,99</h6>
                        <hr>
                        <div class="pix">
                            <h6>Valor à vista no Pix: <br>
                            R$ 999,99 <br>
                            (Economize: R$ 99,99)</h6>
                        </div>
                        <br><br>
                        <a href="pagamento.php"><button id="btn1">IR AO PAGAMENTO</button></a> <br> <br>
                        <button id="btn2">AGENDAR MAIS SERVIÇOS</button>
                    </div>
                                            
                </div>
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
</body>
</html>