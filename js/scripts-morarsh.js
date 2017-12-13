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

login = {
    lembrarme: function(){
        var cbLembrarme = document.querySelector("#lembrar");
        if(cbLembrarme){
            cbLembrarme.addEventListener("click", function(){
                check = cbLembrarme.checked;
                console.log(check);
                if(!check){
                    var req = new XMLHttpRequest;
                    req.onreadystatechange = function(){
                        if(req.readyState == 4 && req.status == 200){
                            //alert(req.responseText);
                        }
                    }
                    req.open("GET", "../controle/CLogin.php?processo=naolembrar", true);
                    req.send(null);
                    alert("bb");
                }else{
                    var email = document.querySelector("#email").value;
                    //AJAX
                    var req = new XMLHttpRequest;
                    req.onreadystatechange = function(){
                        if(req.readyState == 4 && req.status == 200){
                            alert(req.responseText);
                        }
                    }
                    req.open("GET", "../controle/CLogin.php?processo=lembrarme&email="+email, true);
                    req.send(null);
                }



            });
            console.dir(cbLembrarme);
        }
    }
};

filtro = {
    preencherFiltrosSelecionados: function(){
        var input;
        var dados = document.querySelector('#filtrosUsu');
        if(dados && dados.value.length > 0){
            dados = dados.value.split(new RegExp('aspas', 'i')).join('\"');
            objDados = JSON.parse(dados);
            
            for(var key in objDados){
                input = document.querySelector('#' + key);
                if(input)
                    input.setAttribute("checked", true);
            }
        }
    }
};

(function(){
    usuario.preecherDadosFormulario();
    login.lembrarme();
    filtro.preencherFiltrosSelecionados();
})();