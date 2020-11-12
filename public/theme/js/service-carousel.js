// jQuery script for service carousel

$(document).on('ready', function() {
    "use strict";
    $(".service").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        navigation: true,
        navigationText: ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        pagination: false

    });

});
