$(function() {

    $("#criarConta").click(function() {

        // codigo de exemplo para altenar exibicao
        $("#LoginAoMenos6Ok").css({display: 'inline'});
        $("#LoginAoMenos6Nok").css({display: 'none'});

    });

    $("input").keyup(function() {

        console.log($("#login").val());
        console.log($("#novaSenha").val());
        console.log($("#repitaSenha").val());
    });
});