//metodo que eniva dados de forma assincrona (recebe objecto  da classe FormData)
function enviarAjax(formData,metodo, url) {
    var req;

    //validacao do browser (caso nao tenha suporta para ajax)
    try {
        //para browsers: opera, firefox, safari ...
        req = new XMLHttpRequest(); //objecto que permite comunicacao com o servidor
    } catch (e) {
        //para IE
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("Seu navegador não possui suporte Ajax!");
                return false;
            }
        }
    }
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
           //alert(req.responseText);
        } 
            
    };
    req.open(metodo, url, true);
    req.send(formData);
    
};

//metodo que consulta dados de forma assicrona
function requisitarAjax(metodo, url, id) {
    var req;

    //validacao do browser (caso nao tenha suporta para ajax)
    try {
        //para browsers: opera, firefox, safari ...
        req = new XMLHttpRequest(); //objecto que permite comunicacao com o servidor
    } catch (e) {
        //para IE
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("Seu navegador não possui suporte Ajax!");
                return false;
            }
        }
    }
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById(id).innerHTML = req.responseText; //indica onde receber o retorno
        } 
			
    };
    req.open(metodo, url, true);
    req.send();
};

//metodo que eniva dados de forma assincrona (recebe objecto  da classe FormData)
function enviarReceberAjax(formData, metodo, url, id) {
    var req;

    //validacao do browser (caso nao tenha suporta para ajax)
    try {
        //para browsers: opera, firefox, safari ...
        req = new XMLHttpRequest(); //objecto que permite comunicacao com o servidor
    } catch (e) {
        //para IE
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("Seu navegador não possui suporte Ajax!");
                return false;
            }
        }
    }
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById(id).innerHTML = req.responseText; 
            //alert(req.responseText);
        }

    };
    req.open(metodo, url, true);
    req.send(formData);

};