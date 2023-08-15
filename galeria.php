<head>
   <?php
  include('includes/head.php');
  ?>
    <title>Galeria</title>
</head>
<body>
<?php
  include('includes/menu.php');
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
   
    <footer>
    <?php
   include('includes/rodape.php');
   ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>