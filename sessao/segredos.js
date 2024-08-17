$(function() {
    $.ajax({
        type: "GET",
        url: "obterSegredos.php",
        success: data => {
            console.log(data);
            $("#login").html(data.autenticado);
            data.segredos.forEach(segredo => {
                $("#segredos").append( $("<li>").text(segredo));
            });
        },
        error: (xhr,status,error) => {
            if(xhr.status === 401) {
                window.location = "index.html";
            } else {
                console.error(error);
            }
        }
    });

    $("#sair").click(function() {
        $.ajax({
            type: "POST",
            url: "sair.php",
            success: data => {
                window.location = "index.html";
            },
            error: (xhr,status,error) => {
                console.error(error);
            }
        });
    });
});