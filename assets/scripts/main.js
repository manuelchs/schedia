$(document).ready( function() {
    animateScroll();
    
    $('body').click( function(e) {
        if ( e.target.id !== 'languageSubmenu' && $(e.target).parent()[0].id !== 'languageSubmenu' && e.target.id !== 'languageOptions' ) {
            $('#languageOptions').hide(100);
        }
    });

    $('#languageSubmenu').click(function() {
        $('#languageOptions').show(100);
    });

    $('#languageOptions a').click(function() {
        // Cambiar el idioma
    });
    
    // ACTIONS TO CLOSE MODAL
    $('.close-modal').click( function(isIframe = false) {
        $(this).parent().removeClass('show-modal');
        if ( isIframe ) {
            $('#youtubeIframe').attr('src', '');
        }
    });

    $('.modal').click( function(e) {
        if ( e.target === e.currentTarget ) {
            if ( $(this).hasClass('show-modal') ) {
                $(this).removeClass('show-modal');
            }
            if ( e.target.id === 'modalVideo' ) {
                $('#youtubeIframe').attr('src', '');
            }
        }
    });


    $(window).on( 'resize', function() {
        animateScroll();
    });

    $(window).on( 'scroll', function() {
        animateScroll();
    });

    $('.mobile-menu-trigger').click(function() {
        $('#sub-navbar').toggleClass('opened');
        animateScroll();
    });

    $('.links-list h5').click(function(){
        if ( window.innerWidth < 900 ) {
            $(this).parent().find('.links').toggle(150);
        animateScroll();
        }
    });

});

function openModal(idModal, isIframe = false) {
    if ( isIframe ) {
        $('#youtubeIframe').css('display', 'none');
        $('#youtubeLoader').css('display', 'block');
        $('#youtubeIframe').attr('src', 'https://www.youtube.com/embed/BgElc7Fj8oQ?autoplay=1&muted=1&rel=0');
        $( "#youtubeIframe" ).on("load",function() {
            $('#youtubeIframe').css('display', 'block');
            $('#youtubeLoader').css('display', 'none');
        });
    }
    $('#' + idModal).addClass('show-modal');
}

function animateScroll() {
    const elements = document.querySelectorAll('.custom-animation');
    for (let index = 0; index < elements.length; index++) {
        const element = elements[index];
        const elementPosition = element.getBoundingClientRect();
        const elementCenter = elementPosition.height;
        if (elementPosition.top < window.innerHeight - elementPosition.height + elementCenter && elementPosition.top > (elementPosition.height - 20) * -1) {
            if (!element.classList.contains('custom-animation-end')) {
                element.classList.add('custom-animation-end');
                if ( element.classList.contains('counter-animation') ) {
                    animateCounter(element);
                }
            }
        } else {
            element.classList.remove('custom-animation-end');
            if ( element.classList.contains('counter-animation') ) {
                resetCounters(element);
            }
        }
    }
}

function scrollToID(id, isNavbar = true) {
    var event = new Event(event);
    event.preventDefault();
    if ( id === 'home' ) {
        if( window.location.pathname === '/' || window.location.pathname === '/index.php' ) {
            $('html, body').animate({ scrollTop: 0 }, 700);
        } else {
            window.location.href = '/';
        }
    } else {
        if ( isNavbar ) {
            if( window.location.pathname === '/' || window.location.pathname === '/index.php' ) {
                if ($('#mainNav').hasClass('mobile-opened')) {
                    $('#mainNav').removeClass('mobile-opened');
                }
                $('html, body').animate({ scrollTop: $(id).offset().top - 80 }, 700);
                setTimeout( function() {
                    animateScroll();
                }, 1000 );
            } else {
                window.location.href = '/' + id;
            }
        } else {
            $('html, body').animate({ scrollTop: $(id).offset().top - 80 }, 700);
            setTimeout( function() {
                animateScroll();
            }, 1000 );
        }
    }
}

function animateCounter(e) {
    console.log(e);
    console.log($(e).attr('counter'));

    var durationAnimation = 2000;
    var iteration = parseInt(durationAnimation / $(e).attr('counter'));

    var animation = setInterval(function() {
        console.log('Animating');
        if (parseInt($(e).html()) < parseInt($(e).attr('counter'))) {
            $(e).html(parseInt($(e).html()) + 2);
        } else {
            $(e).html($(e).attr('counter'))
            clearInterval(animation);
        }
    }, iteration);
}

function resetCounters() {
    $('.counter-animation').html(0);
}