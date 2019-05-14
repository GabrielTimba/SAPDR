/* Captura evento do butao que minimiza o menu do sidebar */
$(document).ready(function () {
        $('#menu-btn').on('click', function () {
            $('#menu').toggleClass('menu-switch');
        });
});

