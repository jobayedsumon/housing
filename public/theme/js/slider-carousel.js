// Template slider jQuery script

$(document).on('ready', function() {
    $(".slider").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 3000,
        paginationSpeed: 400,
        singleItem: true,
        pagination: true,
        autoPlay: true,
        navigation: true,
        navigationText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
        addClassActive: true,

    });

    $("#bod_slider").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 3000,
        paginationSpeed: 400,
        singleItem: true,
        pagination: true,
        autoPlay: true,
        navigation: false,
        addClassActive: true,

    });



});
