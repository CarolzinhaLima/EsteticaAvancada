<?php
include('includes/head.php');
?>
<body>
    <div class ="container">
<header>
    <div class="logotipo">
    <img src="img/logo2.png" alt="">
    </div>    
        <nav class="navegation">
            <a href="index.php">Inicio</a>
            <a href="galeria.php">Galeria</a>
            <a href="servico.php">Serviços</a>
            <a href="#">Contato</a>
            <button class="btnLogin-popup">Entrar</button>
        </nav>
    </header>

    <div class="wrapper">

        <div class="form-box login">
            <h2>Entrar</h2>
            <form action="#" method="POST">
              <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="mail" required>
                    <label>E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Lembra-se</label>
                    <a href="#">Esqueci minha Senha?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Faça uma conta?<a href="#" class="resgister-link">Criar conta</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registro</h2>
            <form id="formCadastro" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text"  id="nome_cliente" required> 
                    <label>Nome do Usuário</label>
                </div>
              <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="mail" id="email" required>
                    <label>E-mail</label>
                </div>
                <div class="input-box">
                    <div class="icon">
                <i class="fa-sharp fa-solid fa-phone" style="color: #080a0c;"></i>
                </div>
                    <input type="text" id="telefone"  name="telefone" required>
                    <label>Telefone</label>
                </div>
              <div class="input-box">
            <div class="icon">
              <i class="fa-regular fa-id-card" style="color: #000000;"></i>
            </div>
                    <input type="mail" id="cpf" name="cpf" required>
                    <label>CPF</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="senha" required>
                    <label>Senha</label>
                </div>
                <button type="submit" class="btn">Criar</button>
                <div class="login-register">
                    <p>Voltar a tela de Entrada?<a href="#" class="login-link">Clique Aqui</a></p>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <?php
        include ('includes/rodape.php');
        ?>
    </footer>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
$(document).ready(function(){
     $('#telefone').mask("(99) 99999-9999");
     $('#cpf').mask("999.999.999-99");
});
</script>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/scriptBack.js"></script>
</body>
</html>