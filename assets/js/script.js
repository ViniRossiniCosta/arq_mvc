function enviarEmail() {
    var nome = $('input[name=nome]').val();
    var email = $('input[name=email]').val();
    var mensagem = $('textarea').val();

    $.ajax({
        url: 'http://localhost:8080/simples/arq_mvc/contato/enviar/enviar_email',
        type: 'POST',
        data:{
            nome:nome,
            emial:email,
            msg:mensagem
        },
        success:function(html) {
            $('.msg').html('<br> cadastro realizado com sucesso');
        }
    });
}