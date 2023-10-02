import './bootstrap';

$(document).ready(function() {
    $(".menu-sub").hide();

    $("a[data-toggle='submenu']").click(function(e) {
        e.preventDefault();

        var submenu = $(this).next(".menu-sub");

        submenu.slideToggle();

        $(this).find(".submenu-toggle-icon").text(submenu.is(":visible") ? "" : "►");
    });

    $("ul.menu-sub a").click(function() {
        window.location.href = $(this).attr("href");
    });
});
