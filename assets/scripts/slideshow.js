$(document).ready( function() {
    setTimeout( function() {
        $('.slide-show-item:last').addClass('animating');
    }, 100);

    setInterval(function(){
        next();
    }, 6000);

});

function next() {
    $('.slide-show-item:last').addClass('hide');
    $('.slide-show-item.animating').removeClass('animating');
    $('.slide-show-item:last').prev().addClass('animating');
    setTimeout( function() {
        $('.slide-show-item:first').before($('.slide-show-item:last'));
        $('.slide-show-item.hide').removeClass('hide');
    }, 1100);
}