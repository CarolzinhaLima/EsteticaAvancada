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
            <div class="ponto"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: gray;"></i><br>Carrinho</div>
            <div class="ponto"><i class="fa-solid fa-credit-card fa-2xl fa-bounce" style="color: #de0202;"></i><br> Pagamento</div>
            <div class="ponto"><i class="fa-solid fa-eye fa-2xl" style="color: gray;"></i><br>Confirmação</div>
            <div class="ponto"><i class="fa-solid fa-check-double fa-2xl" style="color: gray;"></i><br>Conluir</div>
        </div>
        
        <h1>Forma de Pagamento</h1>
        <div class="caixa2">
            <div class="btnbox">
                <a href="pagamento.php"><button class="btnpix3" id="btnpix3" >PIX</button></a>
                <a href=""><button class="btnpag2" id="btnpag2" >PAGAMENTO NO LOCAL</button></a>            
            </div>
           
            <p> Pagamento no local <br>

                O pagamento dos serviços podem ser pagos no local via cartão de débito/crédito, pix ou em nota real.</p><br>
                <div class="pix2">


                
                <div class="icons">
                <i class="fa-brands fa-pix fa-2xl" style="color: #0d0d0d;"></i>  <p> Pix</p> </div>
                
                <div class="icons"> <i class="fa-brands fa-cc-mastercard fa-2xl" style="color: #000000;">  </i><p> Cartão credito/debito</p></div> 
                <div class="icons"> <i class="fa-solid fa-hand-holding-dollar fa-2xl" style="color: #000000;"> </i><p> Pagamento local</p> </div> 
           
                </div>
             
                      
        </div>
        <div class="info">
            <div class="pix">
                <h6>Valor à vista no Pix: <br>
                R$ 999,99 <br>
                (Economize: R$ 99,99)</h6>
            </div>
            <div class="total">
                TOTAL DA SUA COMPRA: <br> R$ 99.999,99
            </div>
        </div>
        <div class="opc">
            <a href="carrinho.php"><button id="voltar">VOLTAR</button></a>
            <a href="confirmacao2.php"><button id="btnpix2"> PAGAR NO LOCAL</button></a>
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