if ($(".btn-editar").length > 0) {
    $(".titulo").attr("contentEditable", true);
} //si se puede editar



//$(".footer").attr("contentEditable", true);

$(".btn-editar").on('click', function() {

    var titulo = $(".titulo").text();
    // var footer = $(".footer").text();
    var id = $(".id").text();

    /*console.log(titulo);
    console.log(footer);*/


    $.ajax({
        type: 'post',
        url: 'editar_master',
        data: {
            '_token': $('input[name=_token').val(),
            // '_token': '{{csrf_token()}}'
            'titulo': titulo
        },
        success: function(data) {
            window.location.reload();
        },


    });

})