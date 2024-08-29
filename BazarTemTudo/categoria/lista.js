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
                adicionarLinhaNaTabela(categoria);
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
                adicionarLinhaNaTabela(categoria);
                $("#mensagemModal").html("Categoria adicionada com sucesso!");
                modal.show();                           
            },
            error: (xhr,status,error) => {
                $("#mensagemModal").html("Erro ao adicionar categoria!");
                modal.show();                           
            }
        });
    });

    $("#alterar").click(() => {
        const id_categoria = $("#idCategoriaParaAlterar").val();
        const descricao = $("#descricaoParaAlterar").val();
        $.ajax({
            type: "POST",
            url: "/BazarTemTudo/categoria/alterar.php",
            data: { id_categoria, descricao },
            success: data => {
                $("#categoria_descricao_" + id_categoria).html(descricao);
                $("#mensagemModal").html("Categoria alterada com sucesso!");
                modal.show();                            
            },
            error: (xhr,status,error) => {
                $("#mensagemModal").html("Erro ao alterar categoria!");
                modal.show();                           
            }
        });
    });
});

function iniciarAlterar(id,descricao) {
    $("#idCategoriaParaAlterar").val(id);
    $("#descricaoParaAlterar").val(descricao);
    const modal = new bootstrap.Modal('#modalAlteracao', {});
    modal.show();
}

function adicionarLinhaNaTabela(categoria) {
    $("<tr><td id='categoria_descricao_" + categoria.id_categoria + "'>" + 
        categoria.descricao + "</td><td>" + categoria.id_categoria + "</td>" +
        "<td><button onclick='iniciarAlterar(" + categoria.id_categoria + ",\"" + categoria.descricao 
        + "\")'>Alterar</button></td></tr>").appendTo($("#corpoTabela"));
}