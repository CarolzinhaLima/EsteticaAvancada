<?php

include "includes/head.php";
include "includes/menu.php";

?>

<body>
         <div class="inicio">
            <h1 class="H">Tratamentos estéticos para dar mais confiança na sua autoestima</h1>
            
            <div class="mobli">
            <h2>Todos os Serviços</h2>  
            </div>
            
            <div class="conter">
                  <div class="lista">
                    <ul>
                        <h2 class="pre">Histórico de Serviços</h2>
                        <li>
                          <?php
                          echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>'?>
                        </li>
                    </ul>
                  </div>
                  <div class="linha-vertical"></div>
                  <div class="situacao">
                    <ul>
                        <h2 class="pre">Situação do Serviço</h2>
                        <li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p></li>
                    </ul>
                  </div>
              </div>

              <div class="conter_moblie">
                  <div class="lista_2">
                    <ul>
                        <h2 class="pre">Histórico de Serviços</h2>
                        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p></li>
                    </ul>
                  </div>
              </div>

        </div>

         <h2 class="H">Selecione o serviço que deseja realizar o agendamento!</h2>
    <section class="servicos">

      <form action="">

      <div>
        <fieldset class="radio-image">
        <div>
        <label for="priserv">
          <input type="radio" name="ser" id="priserv" value="primeiro">
          <img src="img/servico1.0.jpg" alt="...">
          <h2>serviço1</h2>
        </label>
        </div>

        <div>
        <label for="secserv">
          <input type="radio" name="ser" id="secserv" value="segundo">
          <img src="img/servico2.0.jpg" alt="...">
          <h2>serviço2</h2>
        </label>
        </div>

        <div>
        <label for="terserv">
          <input type="radio" name="ser" id="terserv" value="terceiro">
          <img src="img/servico3.0.jpg" alt="...">
          <h2>serviço3</h2>
        </label>
        </div>
        <div>
        <label for="quaserv">
          <input type="radio" name="ser" id="quaserv" value="quarto">
          <img src="img/servico1.0.jpg" alt="...">
          <h2>serviço1</h2>
        </label>
        </div>

        <div>
        <label for="quiserv">
          <input type="radio" name="ser" id="quiserv" value="quinto">
          <img src="img/servico2.0.jpg" alt="...">
          <h2>serviço2</h2>
        </label>
        </div>

        <div>
        <label for="sexserv">
          <input type="radio" name="ser" id="sexserv" value="sexto">
          <img src="img/servico3.0.jpg" alt="...">
          <h2>serviço3</h2>
        </label>
        </div>
        </fieldset>
      </div>
      <br>
      <div>
      <h2 style="margin: 0px 10rem 0px 0px">Datas Disponiveis</h2>
      <select name="data" id="data">
        <option value="">opção 1</option>
        <option value="">opção 2</option>
        <option value="">opção 3</option>
      </select>
      </div>

      <div>
       <button style="cursor:pointer;" class="agendar" type="submit"><i class="fa-solid fa-cart-shopping"></i> Agendar serviço</button>
      </div>
      </form>   
      
    </section>
    
    

    <h2 style="text-align: center; margin: 25px 0px 25px 0px;">Formas de Pagamento</h2>
    <div style=" width: 100%; display: flex; justify-content: space-around">
      
        <div style="display: flex; justify-content: center; align-items: center;">
        <i class="fa-regular fa-money-bill-1" style="font-size: 2rem"></i><h2 style="font-size: 1.2rem; margin:5px; " >Pagamento no local</h2>
        </div>
        <div style="display: flex;justify-content: center; align-items: center;">
        <i class="fa-brands fa-pix" style="font-size: 2rem"></i><h2 style="font-size: 1.2rem; margin:5px">Pagamento no pix</h2>
       </div>  
  </div> 
  <script src="https://kit.fontawesome.com/ecf77e062b.js" crossorigin="anonymous"></script>
</body>
</html>