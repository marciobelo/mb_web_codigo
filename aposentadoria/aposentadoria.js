$(function() {
    $("#calcular").click(function() {

        var nome = $("#nome").val();
        var idade = $("#idade").val();
        var tempoContribuicao = $("#tempoContribuicao").val();
        var sexo = $("#sexo").val() === "M" ? "M" : "F";
        var especial = $("#especial").is(":checked");
        const modal = new bootstrap.Modal('#modal', {});
        $.ajax({
            type: "POST",
            url: "calcular.php",
            data: {
                nome,
                idade,
                tempoContribuicao,
                sexo,
                especial
            },
            success: (result,status) => {
                console.log(result);
                console.log(status);
                if(result.falta === 0) {
                    $("#mensagemModal").html("Parabéns! Você já pode se aposentar!");
                } else {
                    $("#mensagemModal").html("Falta " + result.falta + " para sua aposentadoria!");
                }
                modal.show();
            },
            error: (xhr,status,error) => {
                console.error(xhr);
                console.error(status);
                console.error(error);
                $("#mensagemModal").html("Erro ao calcular tempo restante!");
                modal.show();
            }
        });
    });
});