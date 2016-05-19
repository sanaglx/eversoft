$(document).ready(function () {
    $('.carousel').carousel({
        interval: 5000,
        pause: 'hover',
        wrap: true
    });

    $('.fancybox').fancybox();

    $('#popupbutton').fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        },
        'padding': [45, 73, 21, 73],
        'overlayOpacity': 0.8,
        'centerOnScroll': true,
        'maxWidth': 400,
    });


    $("#form-feedback").submit(function (event) {
        var postForm = $('#form-feedback').serialize();
        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: postForm,
            dataType: 'json',
            success: function (data) {
                if (!data.success) {
                    if (data.errors.name) {
                        $('.throw_error').fadeIn(1000).html(data.errors.name);
                    }
                } else {
                    $('#form-feedback').fadeIn(1000).html("<h2>" + data.posted + "</h2>");
                }
            }
        });
        event.preventDefault();
    });
    
    $("#form-feedback1").submit(function (event) {
        var postForm = $('#form-feedback1').serialize();
        $.ajax({
            type: 'POST',
            url: 'mail3.php',
            data: postForm,
            dataType: 'json',
            success: function (data) {
                if (!data.success) {
                    if (data.errors.name) {
                        $('.throw_error1').fadeIn(1000).html(data.errors.name);
                    }
                } else {
                    $('#form-feedback1').fadeIn(1000).html("<h2>" + data.posted + "</h2>");
                }
            }
        });
        event.preventDefault();
    });

});

    /***********************************************************/

    $(function () {
        $('#results1').on('click', '#okno', function () {
            $(this).fadeOut(350, function () {
                $(this).remove();
                $(this).hidden();
            });
        });
    });

    $("body").on("click", ".xxdx", function () {
        $('#modal4').fadeOut(200);
        $('#modal5').fadeOut(200);
        $('#modal7').fadeOut(200);
        $('#okno').fadeOut(200);
        $('#okno1').fadeOut(200);
        $('#okno3').fadeOut(200);
        $('#okno5').fadeOut(200);
        $('#okno6').fadeOut(200);
        $('#okno7').fadeOut(200);
        $('#okno8').fadeOut(200);
        $('#okno9').fadeOut(200);
        $('#okno10').fadeOut(200);
        $('#overlay').fadeOut(200);
        $('.overlay1').fadeOut(200);
        $('input').val('');
        $('textarea').val("");
        $('.tarea-end').text("");
    });

    $("body").on("click", ".xxd1", function () {
        $('#okno').fadeOut(200);
        $('#okno1').fadeOut(200);
        $('#okno3').fadeOut(200);
        $('#okno5').fadeOut(200);
        $('#okno5').fadeOut(200);
        $('#okno7').fadeOut(200);
        $('#okno8').fadeOut(200);
        $('#okno9').fadeOut(200);
        $('#okno10').fadeOut(200);
        $('.overlay1').fadeOut(200);
    });

    function ajax1() { //Ajax отправка формы
        var msg = $("#form1").serialize();
        $.ajax({
            type: "POST",
            url: "./mail_form/form1.php",
            data: msg,
            success: function (data) {
                $("#results1").html(data);
                $(".overlay1").show();
            },
            error: function (xhr, str) {
                alert("Возникла ошибка!");
            }
        });
    }
    
    /*work.html*/
    function ajax5() { //Ajax отправка формы
        var msg = $("#form2").serialize();
        $.ajax({
            type: "POST",
            url: "./mail_form/form2.php",
            data: msg,
            success: function (data) {
                $("#results1").html(data);
                $(".overlay1").show();
            },
            error: function (xhr, str) {
                alert("Возникла ошибка!");
            }
        });
    }
    
    function ajax2() {
    var form = document.forms.form2;

    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./mail_form/form6_1.php");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                data = xhr.responseText;
                if (data == "true") {
                    $("#results1").html(data);
                    $(".overlay1").show();
                } else {
                  /*  $("#results6").replaceWith("<p >Ошибка! Обновите страницу...<p>");*/
                   $("#results1").html(data);
                  $(".overlay1").show();
                }
            }
        }
    };

    xhr.send(formData);

}



















