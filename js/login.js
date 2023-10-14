$(document).ready(function () {

});

//Função para realizar login
$('#btnLogin').click(function () {
    var pass = $('#txtSenha').val();
    var usu = $('#txtUsuario').val();
    
    if (usu == "" || pass == "") {
        swal('warning', 'Campos em branco', 2000)
    }else{
        $.post('functions/login.php', {usuario:usu, senha:pass}, function(resposta){
            console.log(resposta);
            if(resposta == true){
                swal('success','Logado com sucesso');
                window.location.href="home.php";
            }else{
                swal('error','Usuário ou senha incorretos!');
                //Limpa form
                $('#frmLogin').each (function(){
                    this.reset();
                    $('#txtUser').focus();
                });
            }
        });
    }

   });