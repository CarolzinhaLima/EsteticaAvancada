$('#formCadastro').on("submit", function(e){
    //impede a página de ser recarregada
    e.preventDefault();
    var u_nome_cliente = $('#nome_cliente').val();
    var u_email = $('#email').val();
    var u_telefone = $('#telefone').val();
    var u_cpf = $('#cpf').val();
    var u_senha = $('#senha').val();
    
$.ajax({
    url: 'http://localhost/esteticaAvancada/cadastro/cadastro.php',
    method: 'POST',
    data: {nome_cliente: u_nome_cliente, email: u_email, telefone: u_telefone, cpf: u_cpf, senha: u_senha},
    dataType: 'json'
    }).done(function(result){
        $('#nome_cliente').val('');
        $('#email').val('');
        $('#telefone').val('');
        $('#cpf').val('');
        $('#senha').val('');
        console.log(result);
        wrapper.classList.remove('active');
        wrapper.classList.add('active-popup');
            
    });
});

function getComments() {
    $.ajax({
        url: 'http://localhost/adm/cliente.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        //console.log(result);
        for (var i = 0; i < result.length; i++) {
            $('.tbody').prepend("<form action="clienteBack.php" method="POST">
            <tr>
                
                <th><input value="" name="nome_cliente" type=""></th>
                <th><input value="" name="email" type=""></th>
                <th><input value="" name="telefone" type=""></th>
                <th><input value="" name="cpf" type=""></th>
                <th><input value="" name="senha" type=""></th>
                <th><button class="submit" name="id_excluir" type="submit">Excluir</button></th>
                <th><button class="submit" name="id_att" type="submit">Atualizar</button></th>
                                                                                   
            </tr>
            <th><input value="'.$row->id_cliente.'" name="id" type="hidden"></th>
            </form>");
        }
    });
}

getComments();

