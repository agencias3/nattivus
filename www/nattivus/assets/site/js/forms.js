$(document).ready(function () {
    contact();
    newsletter();
    work();
    removeItem();
    addProduct();
    addQty();
    removeQty();
    cart();
});

function removeItem() {
    $(".removeItem").bind('click', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "/nattivus/orcamento/getRemoveItem/" + id,
            success: function (result) {
                updateCart();
                updateCartTop();
            }
        });
        return false;
    });
}

function addProduct() {
    $(".btnAddProduct").bind('click', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "/nattivus/orcamento/addProduto/" + id,
            success: function (result) {
                updateCartTop();
                alert("Produto adicionado com sucesso!");
            }
        });
        return false;
    });
}

function addQty() {
    $(".add").bind('click', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "/nattivus/orcamento/getAddByOne/" + id,
            success: function (result) {
                updateCart();
            }
        });
        return false;
    });
}

function removeQty() {
    $(".subtract").bind('click', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "/nattivus/orcamento/getReduceByOne/" + id,
            success: function (result) {
                updateCart();
                updateCartTop();
            }
        });
        return false;
    });
}

function updateCartTop() {
    $.ajax({
        type: "GET",
        url: "/nattivus/orcamento/updateCartTop",
        beforeSend: function () {
            $('.cartTop').html("(??) itens");
        },
        success: function (result) {
            $('.cartTop').html(result);
        }
    });
    return false;
}

function updateCart() {
    $.ajax({
        type: "GET",
        url: "/nattivus/orcamento/updateCart",
        beforeSend: function () {
            $('.showCart').html("<strong class='color-orange w-100 f-w-600 f-size-16 p-top-30 p-bottom-30 t-align-c'>Atualizando...</strong>");
        },
        success: function (result) {
            $('.showCart').html(result);
            addQty();
            removeQty();
            removeItem();
        }
    });
    return false;
}

function cart() {
    $("#fCart").submit(function () {
        $('#fCart .def-msg').fadeIn();
        $('#fCart .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/nattivus/orcamento/store",
            beforeSend: function () {
                $('#fCart .def-msg').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('.showCart').fadeOut();
                    $('input[type=text],input[type=email], textarea, select').val('');
                    $('#fCart .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fCart .def-msg').html("<strong class='color-red f-w-600'>" + msgError + "</strong>");
                }

                $('#fCart .send-contact').fadeIn();
            }
        });
        return false;
    });
}

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
            url: "/nattivus/trabalhe-conosco/store",
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
            url: "/nattivus/contato/store",
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
            url: "/nattivus/newsletter/store",
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