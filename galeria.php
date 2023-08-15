<head>
   <?php
  include('includes/head.php');
  ?>
    <title>Galeria</title>
</head>
<body>
<?php
  include('includes/menu.php');
<<<<<<< HEAD
  ?>
  
  <body>
    <div class="flex-container">
    <div class="slide hi-slide">
        <div class="hi-prev"></div>
        <div class="hi-next"></div>
        <ul>
            <li><img src="img/img1.jpg" alt=""></li>
            <li><img src="img/img2.webp" alt=""></li>
            <li><img src="img/img3.webp" alt=""></li>
            <li><img src="img/img4.jpg" alt=""></li>
            <li><img src="img/img5.jpg" alt=""></li>
            <li><img src="img/img6.jpg" alt=""></li>
            <li><img src="img/img7.webp" alt=""></li>
            <li><img src="img/img8.jpg" alt=""></li>
            <li><img src="img/img9.jpg" alt=""></li>
            <li><img src="img/img10.jpg" alt=""></li>
            <li><img src="img/img3.webp" alt=""></li>
            <li><img src="img/img8.jpg" alt=""></li>
            <li><img src="img/img2.webp" alt=""></li>
            <li><img src="img/img1.jpg" alt=""></li>
        </ul>
    </div>
</div>
  
    <script src="https://code.jquery.com/jquery-3.7.0.js">
    </script>
   

    <script src="jquery.hislide.js">
    </script>

    <script>
        $('.slide').hiSlide();
    </script>

</body>
   
=======
  include('mobile/menuMobile.php');
 
  ?>
 
 <h1 id="galeria">Galeria</h1>
 <div class="row1">
    <!--carousel 1--> 
    <div class="col-md-5 col-lg-5">
       <div class="container-slider">
          <div class="divslider" style="background-color: black;">
             <div id="carouselExampleIndicators" data-interval="5000" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>  
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Primeiro Slide">
                      <div class="carousel-caption d-none d-md-block">
                         <h5>Pães Frescos</h5>
                         <p>pão</p>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Segundo Slide">
                   </div>
                   <div class="carousel-item">
                      <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Terceiro Slide">
                   </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Próximo</span>
                </a>
             </div>
          </div>
       </div>
    </div>
 
    <!--carousel 2--> 
    <div class="col-md-5 col-lg-5">
       <div class="container-slider">
          <div class="divslider" style="background-color: black;">
             <div id="carouselExampleIndicators2" data-interval="5000" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                   <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>  
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Primeiro Slide">
                      <div class="carousel-caption d-none d-md-block">
                         <h5>Pães Frescos</h5>
                         <p>pão</p>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Segundo Slide">
                   </div>
                   <div class="carousel-item">
                      <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Terceiro Slide">
                   </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Próximo</span>
                </a>
             </div>
          </div>
       </div>
       <h2></h2>
    </div>
           <!--carousel 3--> 
    <div class="col-md-5 col-lg-5">
        <div class="container-slider">
           <div class="divslider" style="background-color: black;">
              <div id="carouselExampleIndicators3" data-interval="5000" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 </ol>  
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                       <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Primeiro Slide">
                       <div class="carousel-caption d-none d-md-block">
                          <h5>Pães Frescos</h5>
                          <p>pão</p>
                       </div>
                    </div>
                    <div class="carousel-item">
                       <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                       <img class="d-block w-100" src="https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg" alt="Terceiro Slide">
                    </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                 </a>
              </div>
           </div>
        </div>
     </div>
    </div>
>>>>>>> 0a3de85ef50aa6d584f931e274b95caf3d051135
    <footer>
    <?php
   include('includes/rodape.php');
   ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>