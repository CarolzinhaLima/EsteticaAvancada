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
        <div class="pagamento">
            <h1>Forma de Pagamento</h1>
        </div>
        <div class="caixa2">
            <div class="btnbox">
                <a href=""><button class="btnpix" id="btnpix" >PIX</button></a>
                <a href="pagamento2.php"><button class="btnpag" id="btnpag" >PAGAMENTO NO LOCAL</button></a>            
            </div>
            
            <P> Pix <br>

                A melhor opção para suas compras à vista <br>
                
                Pague com PIX e aproveite até 15% OFF. Nessa modalidade, seu pedido é aprovado instantaneamente, o que torna a expedição do seu pedido ainda mais rápida. <br>
                O que você precisa saber antes de pagar por PIX: <br>   
                É necessário possuir uma chave PIX cadastrada no seu Banco; <br>
                Com o seu celular, basta escanear o QR Code ou copiar o código para efetivar a compra; <br>
                O pagamento é processado e debitado do valor em sua conta corrente; <br>
                Como padrão, o Banco Central limitou os pagamentos no período das 20h às 06h, a valores de até R$1.000. Mas você pode solicitar o aumento do limite deste período diretamente com o seu banco, pela Central de Atendimento ou APP. O prazo de liberação é de até 48h.</P>
             
            
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
            <a href="confirmacao.php"><button id="btnpix2"> PAGAR COM PIX</button></a>
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