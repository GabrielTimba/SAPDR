/* Captura evento do butao que minimiza o menu do sidebar */
$(document).ready(function () {
        $('#menu-btn').on('click', function () {
            $('#menu').toggleClass('menu-switch');
        });
});

//implementacao de Ajax na tabela painel Admin
requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=1','v1');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=1","v1");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=2','v2');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=2","v2");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=3','v3');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=3","v3");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=4','v4');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=4","v4");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=5','v5');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=5","v5");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=6','v6');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=6","v6");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=7','v7');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=7","v7");},5000);

requisitarAjax('GET','../model/estatisticaDAO.php?accao=true&&n=8','v8');
setInterval(function(){requisitarAjax("GET","../model/estatisticaDAO.php?accao=true&&n=8","v8");},5000);

