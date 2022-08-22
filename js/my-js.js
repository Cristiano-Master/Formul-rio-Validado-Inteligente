$(function() {
    var atual_fs, next_fs, prev_fs;
    var formulario = $('form[name=formulario]');

    function next(elem){
        atual_fs = $(elem).parent();
        next_fs = $(elem).parent().next();

        $('#progresso li').eq($('fieldset').index(next_fs)).addClass('ativo');
        atual_fs.hide(800);
        next_fs.show(800);
    }

    $('.prev').click(function(){
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('#progresso li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
        atual_fs.hide(800);
        prev_fs.show(800);
    });

   // $('#formulario input[type=submit]').click(function(){
        //return false;
    //});
    $('input[name=next1]').click(function(){
        var array = formulario.serializeArray();
        if (array[0].value == '' || array[1].value == '' || array[2].value  == '') {
            $('.resposta').html('<div class="falha"><p>Campos Vazios, Por favor preencha todos os campos!</p>    </div>');
        }else{
            $('.resposta').html('');
            next($(this));   
        }
        
    });

    $('input[name=next2]').click(function(){
        var array = formulario.serializeArray();
        if (array[3].value == '' || array[4].value == '' || array[5].value  == '') {
            $('.resposta').html('<div class="falha"><p>Campos Vazios, Por favor preencha todos os campos!</p>    </div>');
        }else{
            $('.resposta').html('');
            next($(this));   
        }
        
    });

    $('input[type=submit]').click(function(evento){
        var array = formulario.serializeArray();
        if (array[6].value == '' || array[7].value == '' || array[8].value  == '') {
            $('.resposta').html('<div class="falha"><p>Campos Vazios, Por favor preencha todos os campos!</p>    </div>');
        }else{
            $.ajax({
                method: 'post',
                url: 'my-admin.php',
                data: {cadastrar: 'sim', campos: array}, 
                dataType: 'json',
                beforeSend: function(){
                    $('.resposta').html('<div class="success"><p>Enviando, Porfavor Aguarde alguns segundos!</p>    </div>');
                },
                success: function(valor){
                    if (valor.erro == 'sim') {
                        $('.resposta').html('<div class="falha"><p>'+valor.getErro+'</p>    </div>');
                    }else{
                        $('.resposta').html('<div class="success"><p>'+valor.msg+'</p>    </div>');
                    }
                }
            });
        }

        evento.preventDefault();
        
    });
});