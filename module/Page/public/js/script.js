$(function () {
    $('.show-hide-menu').on('click', function() {
        $(this).next().next().slideToggle();
    });

    $("#content-header-slide").owlCarousel({

        navigation : true, // Show next and prev buttons
        navigationText : ["<",">"],
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
});