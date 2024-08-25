$(function() {

    // Acionar indicativo de carregamento
    $(".spinner-border").css({display: "block"});
    
    const modal = new bootstrap.Modal('#modal', {});

    $.ajax({
        type: "GET",
        url: "/BazarTemTudo/categoria/obterCategorias.php",
        success: (data) => {
            console.log(data);
            // Parar indicativo de carregamento
            $(".spinner-border").css({display: "none"});
            // Carregar miolo da tabela com os dados
            const categorias = JSON.parse(data);
            categorias.forEach(categoria => {
                $("<tr><td>" + categoria.descricao + "</td><td>" + categoria.id_categoria + "</td></tr>")
                    .appendTo($("#corpoTabela"));
            });
        },
        error: (xhr,status,error) => {
            $(".spinner-border").css({display: "none"});
            // Exibir popup de erro
            $("#mensagemModal").html("Erro ao consultar categorias!");
            modal.show();                           
            // Exibir no miolo da tabela erro
            $("<p>Erro ao carregar categorias</p>").appendTo("#corpoTabela");
        }
    });

    $("#adicionar").click(function() {
        $.ajax({
            type: "POST",
            url: "/BazarTemTudo/categoria/adicionar.php",
            data: {
                descricao: $("#descricao").val()
            },
            success: data => {
                $("#descricao").val("");
                const categoria = JSON.parse(data);
                $("<tr><td>" + categoria.descricao + "</td><td>" + categoria.id_categoria + "</td></tr>")
                    .appendTo($("#corpoTabela"));
                $("#mensagemModal").html("Categoria adicionada com sucesso!");
                modal.show();                           
            },
            error: (xhr,status,error) => {
                $("#mensagemModal").html("Erro ao adicionar categoria!");
                modal.show();                           
            }
        });
    });
});