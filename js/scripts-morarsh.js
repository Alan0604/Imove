usuario = {
    preecherDadosFormulario: function(){
        var auxKey = "";
        var dados = document.querySelector('#dados');
        if(dados && dados.value.length > 0){
            dados = dados.value.split(new RegExp('aspas', 'i')).join('\"');
            objDados = JSON.parse(dados);
            
            for(var key in objDados){
                auxKey = key.substring(4, key.length);
                console.log(objDados[auxKey]);
                if(document.querySelector('#' + auxKey))
                    document.querySelector('#' + auxKey).value = objDados[key];
            }
            alert(dados);
        }
    }
};

(function(){
    usuario.preecherDadosFormulario();
})();