<head>
<?php
include('includes/head.php');
?>
    <title>Tela inicio</title>
</head>
<body>
<?php
  include('includes/menu.php');
  include('mobile/menuMobile.php');
  ?>
    <section id="Primeiro">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/teste1.jpg" class="d-block w-100 img-fluid" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/teste2.jpg" class="d-block w-100 img-fluid" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/teste3.jpg" class="d-block w-100 img-fluid" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section id="Segundo">
        <div class="cards">
            <div class="card"><a href=""><img src="img/processos.png" alt=""></a>LOREM</div>
            <div class="card"><a href=""><img src="img/processos.png" alt=""></a>LOREM</div>
            <div class="card"><a href=""><img src="img/processos.png" alt=""></a>LOREM</div>
            <div class="card"><a href=""><img src="img/processos.png" alt=""></a>LOREM</div>
        </div>
    </section>
    <section id="Terceiro">
        <div class="Sobre">
          <h1>Sobre Nós</h1>
           <p>Meee chamo Tatiane Caxiado, formada desde 2018 em estética e cosmetologia e diversos cursos na área da estética como: Fatslim, Slim result, ozonioterapia, soroterapia dentre outros. <br>
           Desenvolvedora do método mais inovador com resultados já na primeira sessão o Shappe Caxi, com o foco total em emagrecimento! <br>
           Ajudando pessoas a resgatar sua autoestima. <br>
           Atuamos no mercado à 4 anos, com espaço localizado em Santos, atendendo toda a Baixada Santista.</p>
        </div>
    </section>
    <section id="Quarto">
        <div class="Link">
            <a href=""><img src="img/Link.jpg" class="img-fluid" alt=""></a>
        </div>
    </section>
    <footer >
    <div class="rodape" style="position:relative; !important">
<div class="container-rodape">
    <div class="footer">
        <ul>
               <li>
                <h6 class="text-center">HORÁRIOS DE ATENDIMENTO</h6>
                <p class="text-center">SEGUNDA À SEXTA DAS 07:00 ÀS 19:00 <br>(ABERTO AGORA)</p>
            </li>

            <li>
                <h6 class="text-center">NOSSA LOCALIZAÇÃO</h6>

                <a class="text-center" href="https://goo.gl/maps/CUvDmACquc1ZY91v5"><p class="text-center">Av. Dr. Pedro Lessa, 1640 - Aparecida, <br> Santos-SP, Sala: 604</p></a>
            </li>
            
            <li class="redes">
                
                <h6 class="text-center">REDES SOCIAIS</h6>
                <div class="svg">
                    <a href="#"><i class="fa-brands fa-facebook fa-2xl" style="color: #000000;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #000000;"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp fa-2xl" style="color: #000000;"></i></a>                              
                </div>
            </li>
            </ul>
            <div class="termo">
            <p><a href="#"> Política de Privacidade</a></p>
            <p><a href="#"> Termos de Compra</a></p>
            <p><a href="#">Política de Serviços</a> </p>
            </div>
         
           
    </div>
    
</div>
<div class="Cliente">
    <p class="text-center">Copyright 2023© Tatiane Caxiado Estética Avançada</p>
</div>
</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  
  </body>
</html>