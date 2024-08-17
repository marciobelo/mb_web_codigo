$(function() {

    $.ajax({
        type: "GET",
        url: "contador.php",
        success: (data) => {
            $("#vezes").html(data.vezes);
        },
        error: (err) => {
            console.error( err);
        }
    })

});