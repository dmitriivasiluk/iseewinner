$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#top').fadeIn();
            } else {
                $('#top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#top').click(function () {
            $('#top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });       
});