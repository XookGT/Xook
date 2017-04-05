var typingInterval;
var selec;
function typing(identificador, atributo, selec) {
    var bloque = ["Teach.", "Learn.",];
    $(identificador).attr(atributo, "");
    var max = bloque.length-1;
    var corre = 0;
    var selec = 0;
    
    function myString() {
        var cadena = bloque[selec];
        if ($(identificador).attr(atributo).length != cadena.length) {
            var dato = cadena.substr(corre, 1);
            var placeholder = $(identificador).attr(atributo) + dato;
            $(identificador).attr(atributo, placeholder);
            corre++;
        } else {
            corre = 0
            selec = (selec < max) ? selec + 1: 0;
            $(identificador).attr(atributo, "");
        }
    };
    typingInterval = setInterval(function() {
        myString();
    }, 400);
}
typing("#typed", "value", selec);

