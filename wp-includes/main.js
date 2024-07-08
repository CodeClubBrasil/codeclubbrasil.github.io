$(document).ready(function () {
    var s = $(document),
        i = $(".lgpd");

    // Verificar se o cookie está definido
    if (!Cookies.get("ccbr_lgpd")) {
        i.show(); // Exibe o popup se o cookie não estiver definido
    } else {
        i.hide(); // Oculta o popup se o cookie estiver definido
    }

    s.on("click", ".js-lgpd-btn", function (t) {
        i.addClass("moveToBottom"),
            Cookies.set("ccbr_lgpd", "1", {
                expires: 7, // Configura o cookie para expirar em 7 dias
                sameSite: "Lax"
            }),
            i.fadeOut('fast'), // Oculta a div com animação
            t.preventDefault();
    });
});