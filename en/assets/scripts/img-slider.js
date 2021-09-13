$(document).ready( function() {
    $('#rangeIMG').on("input change", function(){
        console.log(this.value);
        $('.front-img').css('clip-path', 'polygon(0 0, '+ this.value +'% 0, '+ this.value +'% 100%, 0 100%)');
        $('#icons').css('left', this.value + '%');
        $('.divider').css('left', this.value + '%');
    });

});