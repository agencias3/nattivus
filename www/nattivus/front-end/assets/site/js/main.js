function mascara() {
    var masks = ['(00) 00000-0000', '(00) 0000-00009'];
    $(".masked-phone").mask(masks[1], {
        onKeyPress: function (val, e, field, options) {
            field.mask(val.length > 14 ? masks[0] : masks[1], options);
        }
    });
    $(".masked-cep").mask("99999-999");
    $(".masked-cpf").mask("999.999.999-99");
    $(".masked-cnpj").mask("99.999.999/9999-99");
    $(".masked-validity").mask("99/99");
    $(".masked-date").mask("99/99/9999");
    $('.masked-money').mask('000.000.000.000.000,00', {reverse: true});
}
function scrollPage(x) {
    var newbox = $(x);
    $('html, body').animate({scrollTop: newbox.offset().top - 50}, 600);
}
function menu(el){
    if(el.hasClass('display-1024-none')){
        el.removeClass('display-1024-none');
        $('body').addClass('overflow-h');
    }else{
        el.addClass('display-1024-none');
        $('body').removeClass('overflow-h');
    }
}
function removeProduct(el){
    var r = confirm('Deseja remover este produto?');
    if(r){
        el.parents('li').remove();
        var qtd = $('.list-cart').children('li').length - 1;
        $('.title-2 strong').text('('+qtd+' itens)');
        if($('.list-cart').children('li').length == 1){
            $('.list-cart').html('<p class="w-100 p-top-50 p-bottom-50 t-align-c f-w-700 main-color f-size-30">Carrinho vazio!</p>');
            $('.box-submit').remove();
        }
    }
}
function actionProduct(el){
    var qtd = el.parents('.box-qtd').find('input').val();
    if(el.index() == 0){
        if(el.parents('.box-qtd').find('input').data('stock')){
            if(qtd++ > el.parents('.box-qtd').find('input').data('stock')){
                alert('Quantidade limite por pedido');
                return false;
            }else
                qtd + 1;
        }else
            qtd++;
    }else{
        if(qtd <= 1){
            removeProduct(el);
        }else
            qtd--;
    }
    el.parents('.box-qtd').find('input').val(qtd);
}
function altContact(el){
    if(el.hasClass('active')){
        return false;
    }else{
        var $index = el.index();
        el.parent().find('a').removeClass('active');
        el.addClass('active');
        $(".option-contact").addClass('display-none');
        $(".option-contact").eq($index).removeClass('display-none');
    }
}
$(document).ready(function () {
    mascara();
    $(window).resize(function () {
    });
    $(window).scroll(function () {
    });
    $(window).scroll(function() {
    });
    $(window).on('load', function () {
    });
    $(".box-select select option").click(function(){
        var $this = $(this);
        $this.parents('.box-select').find('b').text($this.text());
    });
    $(document).on('change', 'input:file', function () {
        if ($(this).val() == '') {
            $(this).parent().find('b').text('Anexo (Currículo)');
        } else {
            $(this).parent().find('b').text($(this).val());
        }
    });
});