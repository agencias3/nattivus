$(document).ready(function () {
    contact();
    newsletter();
    work();
});

function work() {
    $("#fWork").submit(function () {
        $('#fWork .def-msg').fadeIn();
        $('#fWork .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/trabalhe-conosco/store",
            beforeSend: function () {
                $('#fWork .def-msg').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fWork .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fWork .def-msg').html("<strong class='color-red f-w-600'>" + msgError + "</strong>");
                }

                $('#fWork .send-contact').fadeIn();
            }
        });
        return false;
    });
}

function contact() {
    $("#fContact").submit(function () {
        $('#fContact .def-msg').fadeIn();
        $('#fContact .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/contato/store",
            beforeSend: function () {
                $('#fContact .def-msg').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fContact .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fContact .def-msg').html("<strong class='color-red f-w-600'>" + msgError + "</strong>");
                }

                $('#fContact .send-contact').fadeIn();
            }
        });
        return false;
    });
}

function newsletter() {
    $("#fNewsletter").submit(function () {
        $('#fNewsletter .def-msg').fadeIn();
        $('#fNewsletter .send-newsletter').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/newsletter/store",
            beforeSend: function () {
                $('#fNewsletter .def-msg').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fNewsletter .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fNewsletter .def-msg').html("<strong class='color-red f-w-600'>" + msgError + "</strong>");
                }

                $('#fNewsletter .send-newsletter').fadeIn();
            }
        });
        return false;
    });
}