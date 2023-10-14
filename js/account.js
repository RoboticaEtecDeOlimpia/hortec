


$('#btnNovaConta').click(function(e){
    e.preventDefault();
    var nome = $('#txtNome').val();
    var email = $('#txtEmail').val();
    var pass = $('#txtSenha').val();
    var rpt_pass = $('#txtRepeteSenha').val();

    if(nome == "" || email == "" || pass == "" || rpt_pass == ""){
        swal('warning', 'Campos em branco!', 2000);
    }else{
        $.post('functions/cadastro.php', {usuario:nome, senha:pass, email:email}, function(resposta){
            console.log(resposta);
            if(resposta == true){
                swal('success','Usuário criado com sucesso!',2000);
                $('#frmCadastro').each(function(){
                    this.reset();
                    $('#txtNome').focus();
                });
            }if(resposta == false){
                swal('error','Erro ao criar usuário', 2000);
                //Limpa form
                    $('#txtNome').focus();
            }
        });
    }
})