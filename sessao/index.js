$(function() {

    $("#entrar").click(function() {

        $.ajax({
            type: "POST",
            url: "entrar.php",
            data: {
                login: $("#login").val()
            },
            success: result => {
                window.location = "segredos.html";
            },
            error: (xhr,status,error) => {
                console.warn(xhr);
                console.warn(status);
                console.warn(error);
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