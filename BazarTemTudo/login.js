$(function() {

    $("#entrar").click(function() {

        $.ajax({
            type: "POST",
            url: "autenticar.php",
            data: {
                login: $("#login").val(),
                senha: $("#senha").val()
            },
            success: result => {
                window.location = "/BazarTemTudo/produto/catalogo.php";
            },
            error: (xhr,status,error) => {
                const modal = new bootstrap.Modal('#modal', {});
                if(xhr.status === 401) {
                    $("#mensagemModal").html("Você não está autorizado");
                } else {
                    $("#mensagemModal").html("Erro genérico!");
                };
                modal.show();                 
            }
        })

    });
});