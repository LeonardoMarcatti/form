$('#senha2').on('blur', 
    function() {
        let senha = $('#senha').val();
        let senha2 = $('#senha2').val()        
        if ((senha != senha2) && (senha != "" || senha2 != "")) {
            alert("As senhas não conferem!");
            $('#senha2').val("");
        }
    }
);

$('#genero').on('change',
     function(){
        if ($('input[type=radio]:checked').length != 0) {
            $('button[type=submit]').removeAttr('disabled');
        }
    }
);

$('button[type=reset]').on('click',
    function(){
        $('button[type=submit]').attr('disabled', "");
    }
);