$(document).ready( function() {
    $('#rangeIMG').on("input change", function(){
        console.log(this.value);
        $('.front-img').css('width', this.value + '%');
    });

});