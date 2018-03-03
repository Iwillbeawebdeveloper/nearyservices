jQuery(document).ready(function($) {
    
    // Scroll to contact relevant section from nav bar
    
    $("#primary-menu a").click(function(e) {
        e.preventDefault();
        console.log($(this).prop('hash'));
        var section = $(this).prop('hash');
        $('html, body').animate({
            scrollTop: $(section).offset().top
        }, 500);
    });
    
    // Scroll to contact form from buttons
    
    $(".scroll-to").click(function(e) {
        e.preventDefault();
        console.log($(this).prop('hash'));
        var section = $('#contact-section');
        $('html, body').animate({
            scrollTop: $(section).offset().top - 30
        }, 500);
    });
    
    // Display Business Name on Form

    $('select#contact-form').on('change', function() {
        if ($(this).children(":selected").attr("id") == "contact-form-chefs") {
            $('#contact-form-field-company').removeClass('hidden');
        } else {
            $('#contact-form-field-company').addClass('hidden');
        }
    });
    
    $(window).resize(function() {
        if (window.innerWidth < 800) {
            ($('.menu-item').addClass('full-width'));

        } else {
            ($('.menu-item').removeClass('full-width'));
        }
    });


    $('.menu-item').click(function() {
        $('#site-navigation').removeClass('toggled');
    });

});
