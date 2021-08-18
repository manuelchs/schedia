$(function () {
    var animationTime = 300;

    setAllSliders();

    $('.slider-button-right').click(function () {
        var sliderID = $(this).parent().find('.slider')[0].id;
        moverD(sliderID);
    });

    $('.slider-button-left').click(function () {
        var sliderID = $(this).parent().find('.slider')[0].id;
        moverI(sliderID);
    });

    function moverD(sliderID) {
        if ($('#' + sliderID + ' + .points .points-item.active').attr('div') == $('#' + sliderID + ' .slider-item').length) {
            $('#' + sliderID + ' + .points .points-item.active').removeClass('active');
            $('#' + sliderID + ' + .points .points-item.p1').addClass('active');
        }
        else {
            var posInitial = $('#' + sliderID + ' + .points .points-item.active').attr('div');
            $('#' + sliderID + ' + .points .points-item.active').removeClass('active');
            var newPos = parseInt(posInitial) + 1;
            $('#' + sliderID + ' + .points .points-item.p' + newPos).addClass('active');
        }
        $('#' + sliderID + '').animate({ marginLeft: '-' + 200 + '%' }, animationTime, function () {
            $('#' + sliderID + ' .slider-item:first').insertAfter('#' + sliderID + ' .slider-item:last');
            $('#' + sliderID + '').css('margin-left', '-' + 100 + '%');
        });
    }

    function moverI(sliderID) {
        if ($('#' + sliderID + ' + .points .points-item.active').attr('div') == 1) {
            $('#' + sliderID + ' + .points .points-item.active').removeClass('active');
            var newPos = parseInt($('#' + sliderID + ' .slider-item').length);
            $('#' + sliderID + ' + .points .points-item.p' + newPos).addClass('active');
        }
        else {
            var posInitial = $('#' + sliderID + ' + .points .points-item.active').attr('div');
            $('#' + sliderID + ' + .points .points-item.active').removeClass('active');
            var newPos = parseInt(posInitial) - 1;
            $('#' + sliderID + ' + .points .points-item.p' + newPos).addClass('active');
        }
        $('#' + sliderID + '').animate({ marginLeft: 0 }, animationTime, function () {
            $('#' + sliderID + ' .slider-item:last').insertBefore('#' + sliderID + ' .slider-item:first');
            $('#' + sliderID + '').css('margin-left', '-' + 100 + '%');
        });
    }

    $('.points-item').click(
        function () {
            var sliderID = $(this).parent().parent().find('.slider')[0].id;
            console.log(sliderID);
            var posInitial = $('#' + sliderID + ' + .points .points-item.active').attr('div');
            var posClicked = $(this).attr('div');
    
            if (posInitial == $('#' + sliderID + ' .slider-item').length && posClicked == 1) {
                moverD(sliderID);
            }
            else if (posClicked == $('#' + sliderID + ' .slider-item').length && posInitial == 1) {
                moverI(sliderID);
            }
            else if (posClicked == posInitial - 1) {
                moverI(sliderID);
            }
            else {
                $('#' + sliderID + ' + .points .points-item.active').removeClass('active');
                $(this).addClass('active');
    
                if (posClicked > posInitial) {
                    $($('#' + sliderID + ' .s' + posClicked)[0]).insertAfter($('#' + sliderID + ' .slider-item')[1]);
                    $('#' + sliderID).animate({ marginLeft: '-' + 200 + '%' }, animationTime, function () {
                        ordenar(posClicked, sliderID);
                        $('#' + sliderID + '').css('margin-left', '-' + 100 + '%');
                    });
                } else if (posClicked < posInitial) {
                    $('#' + sliderID).css('margin-left', '-' + 200 + '%');
                    $($('#' + sliderID + ' .s' + posClicked)[0]).insertBefore($('#' + sliderID + ' .slider-item')[1]);
                    $('#' + sliderID).animate({ marginLeft: '-100%' }, animationTime, function () {
                        ordenar(posClicked, sliderID);
                        $('#' + sliderID).css('margin-left', '-' + 100 + '%');
                    });
                }
            }
        }
    );

    function ordenar(pos, sliderID) {
        var x = 1;
        var els = new Array();
        $('#' + sliderID + ' .slider-item').each(function (i, e) {
            if (i == 0) {
                if (pos - 1 == 0) {
                    els.push($('#' + sliderID + ' .s' + $('#' + sliderID + ' .slider-item').length)[0]);
                } else {
                    var newPos = parseInt(pos - 1);
                    els.push($('#' + sliderID + ' .s' + newPos)[0]);
                }
            } else if (i == 1) {
                els.push($('#' + sliderID + ' .s' + pos)[0]);
            } else if (parseInt(pos) + parseInt(i) - 1 > $('#' + sliderID + ' .slider-item').length) {
                els.push($('#' + sliderID + ' .s' + x)[0]);
                x++;
            } else {
                var newPos = parseInt(pos) + parseInt(i) - 1;
                els.push($('#' + sliderID + ' .s' + newPos)[0]);
            }
        });
        $('#' + sliderID + '').html(els);
    }

    function setAllSliders() {
        $('.slider').each( function() {
            var sliderID = this.id;
            var mc = new Hammer(this);
            mc.on('swipeleft', function(e){
                moverD(sliderID);
            });
            mc.on('swiperight', function(e){
                moverI(sliderID);
            });
            $('#' + sliderID).css('width', ($('#' + sliderID + ' .slider-item').length * 100) + '%');
            $('#' + sliderID + ' .slider-item:last').insertBefore('#' + sliderID +' .slider-item:first');
            $('#' + sliderID).css('margin-left', '-' + 100 + '%');
        });
    }
});